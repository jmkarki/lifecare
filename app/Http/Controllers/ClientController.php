<?php 

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNew;
use App\Role;
use Auth;
use Hash;
use App\User;
use App\Client;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ClientController extends Controller 
{
	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index()
	{
		return view('client.home');
	}

	public function getShow(Request $request)
	{
		$id = Hashids::decode($request->get('key'));
		
		if($request->has('key') && !empty($id))			
		{
			$client = Client::select('id','company_id','name','email','full_address','phone','phone_home','updated_at')->whereId($id)->first();
			if(!empty($client))	
			{
				$reports = $client->reports()->orderBy('id','desc')->simplePaginate(5);
				return view('client.client-each-show')->with(['client' => $client, 'reports' => $reports]);	
			}
			abort(404);
		}
		abort(404);		
	}

	public function getCreate()
	{
		return view('client.create');
	}

	public function postCreate(CreateNew $request, Client $client, User $user)
	{	
		if($request->ajax())
		{
			try
			{
				if($request->has('id') && $request->get('exists') == 1 && Hashids::decode($request->get('id')) > 0)
				{
					$client = $client->whereId(Hashids::decode($request->get('id')))->first();
					$client->name = $request->get('name');
					$client->email = $request->get('email');
					$client->full_address = $request->get('full_address');
					$client->phone = $request->get('phone');
					$client->phone_home = $request->get('phone_home');
					$client->update();
					return ['status' => 200, 'message' => 'Updated Successfully !', 'id' => Hashids::encode($client->id)];
					
				}else if($request->get('exists') == 0)
				{
					$client->name = $request->get('name');
					$client->company_id = Auth::user()->company_id;
					$client->email = $request->get('email');
					$client->full_address = $request->get('full_address');
					$client->phone = $request->get('phone');
					$client->phone_home = $request->get('phone_home');
					$client->save();

					$user->company_id = Auth::user()->company_id;
					$user->client_id = $client->id;
					$user->role_id = User::roleBasic();
					$user->name = $request->get('name');
					$user->username = $request->get('username');
					$user->email = $request->get('email');
					$user->password = Hash::make($request->get('password'));
					$user->type = 0;
					$user->save();

					return ['status' => 200, 'message' => 'Client Created Successfully !', 'id' => Hashids::encode($client->id)];
				}				
			}
			catch(Exception $e)
			{
				return ['status' => 409, 'message' => '$e->getMessage()'];
			}
		}
	}

	public function getView()
	{
		$clients = Client::select('id','name','email','full_address','phone_home','phone','updated_at')->orderBy('id','desc')->simplePaginate(10);
		return view('client.view')->with(['clients' => $clients]);
	}

	public function postCheck(Request $request)
	{
		if($request->ajax() && $request->has('email'))
		{
			$data = Client::whereEmail($request->get('email'))->first();
		}
		if(!empty($data))
		{
			return ['unique' => false, 'status' => 200];
		}
		return ['unique' => true, 'status' => 200];
	}

	public function postAvailable(Request $request)
	{
		if($request->ajax())
		{
			if(!$request->has('name'))
			{
				return response(null, 200);
			}else
			{
				$customers = Client::select('id','name','email','full_address','phone','phone_home')
									->where('name', 'LIKE', '%'.$request->get('name').'%')
									->company()->orderBy('name','asc')
									->get();
				if(!empty($customers))
				{
					foreach ($customers as $each){
						$each->id = Hashids::encode($each->id);
					}
				}
				
				return response($customers, 200);
			}			
		}
	}

	public function postAttach(Request $request)
	{
		if($request->has('client_id'))
		{
			foreach ($request->file('files') as $key => $each)
			{	
				if(empty($each)) abort(404);				
				
				$report = new Report;
				$report->client_id = $request->get('client_id');
				// $report->report_file = base64_encode(file_get_contents($each->getRealPath()));
				$filename = rand(0, 9999999999).'_'.strtotime(Carbon::now()).'_'.mt_rand(0,99999).'.'.$each->getClientOriginalExtension();
				$report->file_name = $filename;
				$report->file_size = $each->getSize();
				$report->file_ext = $each->getClientOriginalExtension();
				$ext = $each->getClientOriginalExtension();
				$report->original_filename = $each->getFilename().'.'.$ext;

				Storage::disk('local')->put($each->getFilename().'.'.$ext,  File::get($each));
				
				$report->mime = $each->getMimeType();
				$report->downloaded = 0;
				$report->lab_num = $request->get('labno')[$key];
				$report->save();
			}
			return redirect('/client/show?key='.Hashids::encode($request->get('client_id')));
		}
		return ['message' => 'Forbidden Request', 'status' => 403]; 
	}

	public function postTrashfile(Request $request)
	{
		if($request->ajax())
		{
			if($request->has('id'))
			{
				$report = Report::find($request->get('id'));
				if(!empty($report))
				{
					$report->forceDelete();
					Storage::delete($report->original_filename);

					return ['statusText' => 'OK','status' => 200, 
							'message' => 'File Removed Successfully.'];
				}
			}
		}
		return ['message' => 'Forbidden Request', 'status' => 403];
	}

	public function getAccount()
	{
		return 'Will be back soon admin!';
	}

	public function getViewfile($id = null)
	{
		$id = Hashids::decode($id);
		$admin = User::roleAdmin();

		if($admin == auth()->user()->role_id && $id)
		{
			$report = Report::whereId($id)->first();
			$file = Storage::disk('local')->get($report->original_filename);
 
			return (new Response($file, 200))
              		->header('Content-Type', $report->mime);
		}
		abort(404);
	}
}

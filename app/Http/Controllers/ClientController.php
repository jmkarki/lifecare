<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNew;
use View;
use App\Role;
use Auth;
use App\Client;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;


// 200 Everything is good
// 401 Unauthenticated request
// 403 Forbidden request
// 404 Page not found
// 500 Server error

class ClientController extends Controller {

	public function index()
	{
		return View::make('client.home')->with(['url' => 'home']);
	}

	public function getShow(Request $request)
	{
		$client = Client::select('id','company_id','role_id','name','username','email','full_address','phone','phone_home','updated_at')->with(['reports' => function($q){
			$q->orderBy('id','desc')->paginate(2);
		}])->whereId($request->get('key'))->first();

		return View::make('client.client-each-show')->with(['url' => 'client/show', 'client' => $client]);
	}

	public function getCreate()
	{
		return View::make('client.create')->with(['url'=>'client/create']);
	}

	public function postCreate(CreateNew $request, Client $client)
	{	
		if(\Request::ajax())
		{
			try
			{
				if($request->has('id') && $request->get('exists') == 1 && $request->get('id') > 0)
				{
					$client = $client->find($request->get('id'));
					$client->name = $request->get('name');
					$client->email = $request->get('email');
					$client->full_address = $request->get('full_address');
					$client->phone = $request->get('phone');
					$client->phone_home = $request->get('phone_home');
					$client->update();
					return ['status' => 200, 'message' => 'Updated Successfully !', 'id' => $client->id];
					
				}else if($request->get('exists') == 0)
				{
					$client->name = $request->get('name');
					$client->role_id = 100;
					$client->company_id = \Auth::user()->company_id;
					$client->password = \Hash::make($request->get('password'));
					$client->email = $request->get('email');
					$client->full_address = $request->get('full_address');
					$client->phone = $request->get('phone');
					$client->phone_home = $request->get('phone_home');
					$client->save();

					return ['status' => 200, 'message' => 'Client Created Successfully !', 'id' => $client->id];
				}				
			}
			catch(Exception $e)
			{
				return ['status' => 409, 'message' => '$e->getMessage()'];
			}
		}
	}

	// public function getAttach()
	// {
	// 	$clients = Client::select('id','name','full_address')->get();
	// 	return View::make('client.attach')->with(['url'=>'client/attach','clients' => $clients]);
	// }

	public function getView()
	{
		$clients = Client::select('id','name','email','full_address','phone_home','phone','updated_at')->orderBy('id','desc')->simplePaginate(10);
		return View::make('client.view')->with(['url'=>'client/view', 'clients' => $clients]);
	}

	public function postCheck(Request $request)
	{
		if(\Request::ajax() && $request->has('email'))
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
		if(\Request::ajax())
		{
			$customers = Client::select('id','name','email','full_address','phone','phone_home')
								->where('name', 'LIKE', '%'.$request->get('name').'%')
								->company()->orderBy('name','asc')
								->get();
			
			return new JsonResponse($customers, 200);
		}
	}

	public function postAttach(Request $request)
	{
		if($request->has('client_id'))
		{
			foreach ($request->file('files') as $key => $each) {					
				$report = new Report;
				$report->client_id = $request->get('client_id');
				$report->report_file = base64_encode(file_get_contents($each->getRealPath()));
				$report->file_name = $each->getClientOriginalName();
				$report->file_size = $each->getSize();
				$report->file_ext = $each->getClientOriginalExtension();
				$report->mime = $each->getMimeType();
				$report->downloaded = 0;
				$report->lab_num = $request->get('labno')[$key];
				$report->save();					
			}
			return redirect('/client/show?key='.$request->get('client_id'));
		}
		return ['message' => 'Forbidden Request', 'status' => 403]; 
	}
}

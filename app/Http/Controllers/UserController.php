<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Client;
use App\User;
use Vinkla\Hashids\Facades\Hashids;
use App\Report;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller {

	public function __construct()
	{
		$this->middleware('subscriber');
	}

	public function getHome()
	{
		$id = Auth::user()->client_id;
		$client = Client::select('id','name','email','full_address','phone','phone_home','updated_at')->whereId($id)->first();
		if(!empty($client))
		{
			$reports = $client->reports()->orderBy('id','desc')->simplePaginate(5);
			return view('user.home')->with(['client' => $client, 'reports' => $reports]);
		}
	}

	public function getAccount()
	{
		return 'Will be back soon user!';
	}

	public function getLogoff()
	{
		Auth::logout();
		return redirect('/welcome');	
	}

	private function setHeaders($report = null)
	{
		$headers1 = [
					'Content-Type' 			=> $report->mime,
					'Connection' 			=> 'keep-alive',
					'Content-Description' 		=> 'File Transfer',
					// 'Content-Disposition' 		=> ' attachement; filename="'.basename($report->file_name),
					'Content-Length' 			=>	 $report->file_size
					];

			$headers2 = ['Content-Description'       => 'File Transfer',
                     'Content-Type'              => 'application/octet-stream',
                     'Content-Disposition'       => 'attachment; filename="'.basename($report->file_name).'"',
                     'Content-Transfer-Encoding' => 'binary',
                     'Connection'                => 'Keep-Alive',
                     'Expires'                   => '0',
                     'Cache-Control'             => 'must-revalidate, post-check=0, pre-check=0',
                     'Pragma'                    => 'public',
                     'Content-Length'            => $report->file_size
                    ];


			$headers3 = ['Content-Description' 		=> 'File Transfer',
					  'Content-Type' 			=> $report->mime, 
					  'Content-Length' 			=> $report->file_size,
					  'Content-Disposition' 	=> 'attachement; filename="'.basename($report->file_name)
					  ];
			return $headers1;
	}

	public function getFile($id = null)
	{
		$id = Hashids::decode($id);
		if($id)
		{
			$report = Report::whereId($id)->first();

			if(auth()->user()->client_id === $report->client_id)
			{
				$file = Storage::disk('local')->get($report->original_filename);
 
				return (new Response($file, 200))
              			->header('Content-Type', $report->mime);				
			}
		}
	}
}

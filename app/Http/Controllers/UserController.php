<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Client;

use Illuminate\Http\Request;

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
		return redirect('/auth/client');	
	}

	public function getFile($id = null)
	{
		return $id;
	}

}

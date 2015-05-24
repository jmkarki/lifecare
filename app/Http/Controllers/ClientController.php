<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNew;
use View;
use App\Role;
use App\Client;
use Carbon\Carbon;

class ClientController extends Controller {

	public function index()
	{
		return View::make('client.home')->with(['url' => 'home']);
	}

	public function getShow()
	{
		return View::make('client.client-show')->with(['url' => 'client/show']);
	}

	public function getCreate()
	{
		return View::make('client.create')->with(['url'=>'client/create']);
	}

	public function postCreate(CreateNew $request, Client $client)
	{	
		$client->name = $request->get('name');
		$client->role_id = 100;
		$client->company_id = \Auth::user()->company_id;
		// $client->username = $request->get('username');
		$client->password = \Hash::make($request->get('password'));
		$client->email = $request->get('email');
		$client->full_address = $request->get('full_address');
		return $client;
	}

	public function getAttach()
	{
		return View::make('client.attach')->with(['url'=>'client/attach']);
	}

	public function getView()
	{
		return View::make('client.view')->with(['url'=>'client/view']);
	}

	public function getCheck()
	{
		return Service::all();
	}
}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNew;
use View;
use App\Role;
use App\Client;

class ClientController extends Controller {

	public function getIndex()
	{
		return 'Under Construction';
	}

	public function getCreate()
	{
		return View::make('client.create')->with(['url'=>'client/create']);
	}

	public function postCreate(CreateNew $request, Client $client)
	{	
		$client->name = $request->get('name');
		$value = Role::whereValue(100)->first()->id;
		$client->role_id = (!empty($value)) ? $value : 0;
		$client->company_id = \Auth::user()->company_id;
		$client->username = strtolower(str_replace(' ', $request->get('name'), '_'));
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
}

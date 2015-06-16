<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;
use App\Http\Requests\ClientLogin;
use App\Http\Requests\MasterLogin;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Auth;

class AuthController extends Controller {

	protected $redirectTo = '/home';
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getRegister()
	{
		return redirect('/');
	}

	public function postRegister()
	{
		return redirect('/');
	}

	public function getLogin()
	{
		return view('auth.login')->with(['error' =>session('error')]);
	}

	public function getClient()
	{
		return view('auth.client-login')->with(['error' => session('error')]);
	}

	public function postClient(ClientLogin $request)
	{
		$field = filter_var($request->get('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		$credentials = ['role_id' => User::roleBasic(),
						$field => $request->get('email'),
						'password' => $request->get('password'),
						'client_id' => $request->get('user_id'),
						];
		if(Auth::validate($credentials))
		{
			if(Auth::attempt($credentials))
			{
				return redirect('user/home');
			}
		}		
		else{
			return redirect('auth/client')
					->withInput()
					->withError('The secret key, email or password provided is incorrect.');
		}
		return redirect('auth/client')->withError('There was a problem signing you in.');
	}

	public function welcome()
	{
		return view('auth.welcome');
	}
}

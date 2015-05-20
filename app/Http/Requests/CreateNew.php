<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use App\Role;

class CreateNew extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;

		if(\Auth::check())
		{
			$value = Role::where('id',\Auth::user()->role_id)->first()->value;
			return ($value > 100) ? true : false;
		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'full_address' => 'required',
			'phone' => 'required',
			'email' => 'required',
		];
	}

}

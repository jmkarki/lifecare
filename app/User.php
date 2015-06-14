<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Role;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','username','client_id','company_id','role_id','type'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public static function roleBasic()
	{
		return Role::whereValue('100')->first()->id;
	}

	public static function roleAdmin()
	{
		return Role::whereValue('101')->first()->id;
	}

	public static function roleAdvance()
	{
		return Role::whereValue('102')->first()->id;
	}

	public function isAdmin()
	{
		if($this->roleAdmin())
		{
			return $this->role_id == $this->roleAdmin();
		}
		return !! $this->role_id;
	}

	public function isSubscriber()
	{
		if($this->roleBasic())
		{
			return $this->role_id == $this->roleBasic();
		}
		return !! $this->role_id;
	}

	public function user()
	{
		return $this->hasOne('App\Role');
	}

}

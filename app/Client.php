<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Client extends Model {

	use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'clients';
	protected $fillable = ['company_id','role_id','name','username','password','email','full_address','phone','phone_home','city','country'];


	public function scopeCompany($query)
	{
		$query->where('company_id', Auth::user()->company_id);
	}

	public function reports()
	{
		return $this->hasMany('App\Report');
	}

}

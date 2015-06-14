<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model {

	use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'roles';
	protected $fillable = ['company_id','name','value'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	

}

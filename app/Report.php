<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model {

	use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'reports';
	protected $fillable = ['client_id','report_file','file_name','file_size','file_ext','downloaded','lab_num'];

	public function client()
	{
		return $this->belongsTo('App\Client');
	}
}

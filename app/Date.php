<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model {

	public static function ago($ptime = null)
	{
	    $estimate_time = time() - strtotime($ptime);

	    if( $estimate_time < 1 )
	    {
	        return 'less than 1 second ago';
	    }

	    $condition = array( 
	                12 * 30 * 24 * 60 * 60  =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	    );

	    foreach( $condition as $secs => $str )
	    {
	        $d = $estimate_time / $secs;

	        if( $d >= 1 )
	        {
	            $r = round( $d );
	            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
	        }
	    }
	}

	public static function size($size = null)
	{
		$size = floatval($size);
		if(is_nan($size) || !is_finite($size)) return '-';
		$units = [0 => ['unit' => 'TB', 'value' => pow(1024, 4)], 1 => ['unit' => 'GB' , 'value' => pow(1024, 3)], 2 => ['unit' => 'MB', 'value' => pow(1024, 2)], 3 => ['unit' => 'KB', 'value' => pow(1024, 1)], 4 => ['unit' => 'B', 'value' => 1]];
		foreach ($units as $each) {
			if($size >= $each['value'])
			{
				$result = $size / $each['value'];
				$result = round($result, 1).' '.$each['unit'];
				break;

			}
		}
		return $result;
	}

}

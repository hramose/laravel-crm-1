<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

   protected $fillable = [
        'doctor_name'
    ];

    //add Doctor
    public static function addDoctor($request)
    {
    	$data=[];
    	if (self::create($request->all())) {
    			$data=['status'=>'success','msg'=>'添加成功！'];
    	}else{
    		$data=['status'=>'error','msg'=>'添加失败！'];
    	}

    	return $data;
    }
}

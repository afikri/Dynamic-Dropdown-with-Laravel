<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['city_id', 'company'];

	public static function companies($id){
		return Company::where('city_id','=', $id)->get();
	}
}

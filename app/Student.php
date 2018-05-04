<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
	protected $guarded = [];

	public function scopeSearch($query, $s){
		return $query->where('surname', 'like', '%' .$s. '%')
		->orWhere('given_name', 'like', '%' .$s. '%');
	}
}
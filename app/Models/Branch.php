<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    
	public $table = "branches";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nomenclature",
		"municipality",
		"status",
		"exercise"
	];

	public static $rules = [
	    "nomenclature" => "required",
		"municipality" => "required",
		"status" => "required",
		"exercise" => "required|alpha"
	];

	public function users()
	{
		 return $this->hasMany('App\User');
	}

}

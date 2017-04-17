<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    
	public $table = "information";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_company",
		"email",
		"address",
		"cp",
		"city",
		"state",
		"phone",
		"logo"
	];

	public static $rules = [
	    "name_company" => "required",
		"email" => "required",
		"address" => "required",
		"cp" => "required",
		"city" => "required",
		"state" => "required",
		"phone" => "required",
		"logo" => "required"
	];

}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Micro extends Model
{
    
	public $table = "micros";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"address",
		"colony",
		"municipality",
		"activity",
		"antiquity",
		"antiquity_locality",
		"business_type",
		"times",
		"local"
	];

	public static $rules = [
	    "name" => "address:string",
		"address" => "required",
		"colony" => "required",
		"municipality" => "required",
		"activity" => "required",
		"antiquity" => "required",
		"antiquity_locality" => "required",
		"business_type" => "required",
		"times" => "required",
		"local" => "required"
	];

}

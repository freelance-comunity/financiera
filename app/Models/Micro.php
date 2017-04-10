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
		"local",
		"accredited_id"
	];

	public static $rules = [
	    "name" => "required",
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
	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }
}

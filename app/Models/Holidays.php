<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    
	public $table = "holidays";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date",
		"name",
		"color"
	];

	public static $rules = [
	    "date" => "required",
	    "name" => "required",
	    "color" => "required"
	];

}

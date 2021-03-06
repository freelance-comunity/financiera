<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    
	public $table = "roles";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"display_name",
		"description"
	];

	public static $rules = [
	    "name" => "required",
		"display_name" => "required",
		"description" => "required"
	];

}

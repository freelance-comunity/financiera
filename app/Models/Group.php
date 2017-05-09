<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
	public $table = "groups";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date_create",
		"branch",
		"folio"
	];

	public static $rules = [
	    "date_create" => "required|date",
		"branch" => "required",
	];

}

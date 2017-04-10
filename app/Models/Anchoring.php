<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anchoring extends Model
{
    
	public $table = "anchorings";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_institution",
		"amount_resource",
		"reference",
		"destination_account"
	];

	public static $rules = [
	    "name_institution" => "required",
		"amount_resource" => "required",
		"reference" => "required",
		"destination_account" => "required"
	];

}

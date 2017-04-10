<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	public $table = "products";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"description",
		"minimum_amount",
		"maximum_amount",
		"minimum_term",
		"maximum_term",
		"cup_interest",
		"surcharge",
		"modality"
	];

	public static $rules = [
	    "name" => "required",
		"description" => "required",
		"minimum_amount" => "required",
		"maximum_amount" => "required",
		"minimum_term" => "required",
		"maximum_term" => "required",
		"cup_interest" => "required",
		"surcharge" => "required",
		"modality" => "required"
	];

}

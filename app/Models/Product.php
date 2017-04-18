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
	"name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
	"description" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"minimum_amount" => "required|numeric",
		"maximum_amount" => "required|numeric",
		"minimum_term" => "required",
		"maximum_term" => "required",
		"cup_interest" => "required",
		"surcharge" => "required",
		"modality" => "required"
	];

}

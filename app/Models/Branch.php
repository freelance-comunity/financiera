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
		"municipality" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"status" => "required",
		"exercise" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/"
	];

	public function users()
	{
		 return $this->hasMany('App\User');
	}

}

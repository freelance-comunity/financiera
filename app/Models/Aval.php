<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aval extends Model
{
    
	public $table = "avals";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"last_name",
		"address",
		"colony",
		"municipality",
		"nacionality",
		"place",
		"birthday",
		"ife",
		"curp",
		"phone",
		"cel",
		"sex",
		"ocupation",
		"address_work",
		"accredited_id"
	];

	public static $rules = [
	    "name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"last_name" =>"required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"address" => "required",
		"colony" => "required",
		"municipality" => "required",
		"nacionality" => "required",
		"place" => "required",
		"birthday" => "required",
		"ife" => "required",
		"curp" => "required",
		"phone" => "required|digits:10",
		"cel" => "required|digits:10",
		"sex" => "required",
		"ocupation" => "required",
		"address_work" => "required"
	];

	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }

    public function credits()
	{
        return $this->hasMany('App\Models\Credits');
    }
}

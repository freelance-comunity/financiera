<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    
	public $table = "references";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"last_name",
		"address",
		"phone",
		"relationship",
		"accredited_id"
	];

	public static $rules = [
	    "name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"last_name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
		"address" => "required",
		"phone" => "required|digits:10",
		"relationship" => "required"
	];

	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }

}

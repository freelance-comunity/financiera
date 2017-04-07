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
		"accrediteds_id"
	];

	public static $rules = [
	    "name" => "required",
		"last_name" => "required",
		"address" => "required",
		"phone" => "required",
		"relationship" => "required"
	];

	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }

}
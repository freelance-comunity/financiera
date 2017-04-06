<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accredited extends Model
{
    
	public $table = "accrediteds";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"last_name",
		"birthdate",
		"cel",
		"phone",
		"email",
		"address",
		"nationality",
		"curp",
		"sex",
		"civil_status",
		"name_conyug",
		"user_id"
	];

	public static $rules = [
	    "name" => "required",
		"last_name" => "required",
		"birthdate" => "required",
		"cel" => "required",
		"phone" => "required",
		"email" => "required",
		"address" => "required",
		"nationality" => "required",
		"curp" => "required",
		"sex" => "required",
		"civil_status" => "required",
		"name_conyug" => "required"
	];

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function references()
    {
        return $this->hasMany('App\Models\References');
    }
    public function address()
    {
        return $this->hasMany('App\Models\Address');
    }

    public function aval()
	{
        return $this->hasMany('App\Models\Aval');
    }

}

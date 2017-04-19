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
		"ife",
		"curp",
		"sex",
		"civil_status",		
		"user_id"
	];

	public static $rules = [
	    "name" => "required|alpha",
		"last_name" => "required|alpha",
		"birthdate" => "required",
		"cel" => "required|digits:10",
		"phone" => "required|digits:10",
		"email" => "required|email",
		"address" => "required",
		"nationality" => "required",
		"ife" =>"required",
		"curp" => "required",
		"sex" => "required",
		"civil_status" => "required",
	];

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function references()
    {
        return $this->hasMany('App\Models\References');
    }
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    public function avals()
	{
        return $this->hasMany('App\Models\Aval');
    }
     public function micros()
	{
        return $this->hasMany('App\Models\Micro');
    }
    public function history()
	{
        return $this->hasMany('App\Models\History');
    }
    public function studies()
	{
        return $this->hasMany('App\Models\Study');
    }

}

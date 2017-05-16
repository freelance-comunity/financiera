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
	"latitude",
	"length",
	"nationality",
	"ife",
	"curp",
	"sex",
	"civil_status",		
	"user_id",
	"branch_id",
	];

	public static $rules = [
	"name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
	"last_name" => "required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
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

	public function branch()
	{
		return $this->belongsTo('App\Models\Branch');
	}

	public function credits()
	{
		return $this->hasMany('App\Models\Credits');
	}

	public function groups()
	{
		return $this->belongsToMany('App\Models\Group');
	}

	public function economic()
	{
		return $this->hasMany('App\Models\EconomicEvaluation');
	}

}

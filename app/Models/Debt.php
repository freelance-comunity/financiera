<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    
	public $table = "debts";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "ammount",
		"status",
		"credits_id"
	];

	public static $rules = [
	    "ammount" => "required",
		"status" => "required"
	];

	public function credit()
	{
		return $this->belongsTo('App\Models\Credits');
	}

	public function payments()
	{
		return $this->hasMany('App\Models\Payments');
	}

}

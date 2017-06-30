<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condonation extends Model
{
    
	public $table = "condonations";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date",
		"branch",
		"adviser",
		"accredited",
		"amount",
		"term",
		"amortization",
		"surcharges",
		"date_to",
		"date_at",
		"justification",
		"credits_id",
		"payments_id"
	];

	public static $rules = [
	    "date" => "required",
		
		"amount" => "required",
		"term" => "required",
		"amortization" => "required",
		"surcharges" => "required",
		"date_to" => "required",
		
		"justification" => "required"
	];
	public function credits()
    {
    	return $this->hasOne('App\Models\Debt');
    } 
    public function payments()
	{
		return $this->hasOne('App\Models\Payments');
	}

}

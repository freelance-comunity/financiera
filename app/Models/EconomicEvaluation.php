<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EconomicEvaluation extends Model
{
    
	public $table = "economic_evaluations";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "place",
		"date",
		"name_accredited",
		"activity_economic",
		"phone",
		"address",
		"sales",
		"buy",
		"gross_profit",
		"other_income",
		"other_expenses",
		"familiar_costs",
		"montly_net_income",
		"accredited_id"
	];

	public static $rules = [
	    "place" => "required",
		"date" => "required",
		"name_accredited" => "required",
		"activity_economic" => "required",
		"phone" => "required",
		"address" => "required",
		"sales" => "required",
		"buy" => "required",
		"gross_profit" => "required",
		"other_income" => "required",
		"other_expenses" => "required",
		"familiar_costs" => "required",
		"montly_net_income" => "required"
	];

	public function accredited()
	{
		return $this->belongsTo('App\Models\Accredited');
	}

}

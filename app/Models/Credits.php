<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    
	public $table = "credits";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date",
		"name_spouse",
		"previous_credit",
		"debts",
		"economic_activity",
		"amount_requested",
		"authorized_amount",
		"warranty",
		"warranty_type",
		"warranty_value",
		"sequence",
		"term",
		"frequency_payment",
		"interest",
		"adviser",
		"observations",
		"requested",
		"qualification",
		"status",
		"accredited_id",
		"address_id",
		"aval_id",
	];
	public static $rules = [
	    "date" => "required",
		"name_spouse" => "required",
		"previous_credit" => "required",
		"debts" => "required",
		"economic_activity" => "required",
		"amount_requested" => "required",
		"authorized_amount" => "required",
		"warranty" => "required",
		"warranty_type" => "required",
		"warranty_value" => "required",
		"sequence" => "required",
		"term" => "required",
		"frequency_payment" => "required",
		"interest" => "required",
		"adviser" => "required",
		"observations" => "required",
		"requested" => "required",
		"qualification" => "required",
		"status" => "required"
	];

	 public function accredited()
    {
        return $this->belongsTo('App\Models\Accredited');
    }

     public function addresses()
    {
        return $this->belongsTo('App\Models\Address');
    }

     public function avals()
    {
        return $this->belongsTo('App\Models\Aval');
    }

    

}

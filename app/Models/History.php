<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    
	public $table = "histories";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "credit_actualy",
		"name_company",
		"amount",
		"term",
		"payment_amount",
		"accredited_id"
	];

	public static $rules = [
	    "credit_actualy" => "required",
		
	];
	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }

}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    
	public $table = "payments";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "number",
		"ammount",
		"surcharge",
		"status",
		"payment_date",
		"status",
		"debt_id",
		"user_id",
		"branch_id"
	];

	public static $rules = [
	    "number" => "required",
		"ammount" => "required",
		"surcharge" => "required",
		"status" => "required",
		"payment_date" => "required",
		"status" => "required"
	];

	public function debt()
	{
		return $this->belongsTo('App\Models\Debt');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

}

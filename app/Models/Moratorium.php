<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moratorium extends Model
{
    
	public $table = "moratoria";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date",
		"surcharges",
		"expiration_from",
		"expiration_to",
		"justification",
		"credit_id"
	];

	public static $rules = [
	    "date" => "required",
		"surcharges" => "required",
		"expiration_from" => "required",
		"expiration_to" => "required",
		"justification" => "required"
	];
	 public function credits()
    {
        return $this->belongsTo('App\Models\Credits');
    }
}

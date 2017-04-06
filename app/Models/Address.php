<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
	public $table = "addresses";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "avenue",
		"streets",
		"number",
		"colony",
		"reference",
		"postal_code",
		"municipality",
		"city",
		"federative"
	];

	public static $rules = [
	    "avenue" => "required",
		"streets" => "required",
		"number" => "required",
		"colony" => "required",
		"reference" => "required",
		"postal_code" => "required",
		"municipality" => "required",
		"city" => "required",
		"federative" => "required"
	];
	
	public function accredited()
    {
        return $this->belongsTo('App\Model\Accredited');
    }
}

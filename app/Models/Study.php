<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    
	public $table = "studies";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "dependent",
		"regimen",
		"type_housing",
		"type_home",
		"time_address",
		"economic",
		"type_material",
		"scholarship",
		"school_grade",
		"sector",
		"company",
		"accrediteds_id"
	];

	public static $rules = [
	    "dependent" => "required",
		"regimen" => "required",
		"type_housing" => "required",
		"type_home" => "required",
		"time_address" => "required",
		"economic" => "required",
		"type_material" => "required",
		"scholarship" => "required",
		"school_grade" => "required",
		"sector" => "required",
		"company" => "required"
	];
	public function accredited()
    {
        return $this->hasOne('App\Model\Accredited');
    }

}

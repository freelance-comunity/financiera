<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
	public $table = "accounts";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_bank",
		"account_number",
		"account_type"
	];

	public static $rules = [
	    "name_bank" => "required",
		"account_number" => "required",
		"account_type" => "required"
	];

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Accredited;

class CreditController extends Controller
{
	public function showRequest($id)
	{	
		$accredited = Accredited::find($id);
		return view('credits.create-request')
		->with('accredited', $accredited);
	}
}

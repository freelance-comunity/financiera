<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LockAccountController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function lockscreen()
	{
		session(['locked' => 'true']);
		return view ('users.lockscreen');
	}

	public function unlock(Request $request)
	{
		$password = $request->input('password');

		$this->validate($request, [
			'password' => 'required',
			]);

		if (\Hash::check($password, \Auth::user()->password)) {
			$request->session()->forget('locked');
			return redirect('/home');
		}
		return back()->withErrors('Contraseña incorrecta. Por favor intenta nuevamente.');
	}
}

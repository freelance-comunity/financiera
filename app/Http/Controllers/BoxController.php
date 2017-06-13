<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use App\Models\Payments;
use App\Models\Branch;
use Carbon\Carbon;

class BoxController extends Controller
{
	public function salesPromoters()
	{
		$users = User::where('type', 'promotor')->get();

		return view('box.promoters')
		->with('users', $users);
	}

	public function cutPromoter($id)
	{
		$promoter = User::find($id);
		$date_now = Carbon::now()->toDateString();
		$payments = $promoter->payments->where('payment_date', $date_now)->where('status', 'Pagado');
		
		return view('box.cut-promoter')
		->with('payments', $payments)
		->with('date_now', $date_now)
		->with('promoter', $promoter);
	}

	public function salesBranches()
	{
		$branches = Branch::all();

		return view('box.branches')
		->with('branches', $branches);
	}

	public function cutBranch($id)
	{
		$branch = Branch::find($id);
		$date_now = Carbon::now()->toDateString();
		$payments = $branch->payments->where('payment_date', $date_now)->where('status', 'Pagado');

		return view('box.cut-branch')
		->with('payments', $payments)
		->with('date_now', $date_now)
		->with('branch', $branch);
	}
}

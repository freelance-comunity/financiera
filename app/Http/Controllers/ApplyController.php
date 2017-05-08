<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use App\Models\Accredited;

class ApplyController extends Controller
{

  public function update(Request $request)
  { 
    $id = $request->input('accredited_id');
    $accredited = Accredited::find($id);

    if ($request->hasFile('photo')) {
      $photo = $request->file('photo');
      $filename = time() . '.' . $photo->getClientOriginalExtension();
      Image::make($photo)->resize(300, 300)->save(public_path('/img/uploads/' . $filename));

      $accredited->photo = $filename;
      $accredited->save();
    }
    return view('pages.upload')
    ->with('accredited', $accredited);
  }
}


<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBranchRequest;
use App\Models\Branch;
use App\User;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class BranchController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{	
		$query = Branch::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $branches = $query->get();

        return view('branches.index', compact('branches'))
            ->with('branches', $branches)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Branch.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('branches.create');
	}

	/**
	 * Store a newly created Branch in storage.
	 *
	 * @param CreateBranchRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBranchRequest $request)
	{
        $input = $request->all();

		$branch = Branch::create($input);

		Alert::success('Sucursal creada exitosamente.');

		return redirect(route('branches.index'));
	}

	/**
	 * Display the specified Branch.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$branch = Branch::find($id);

		if(empty($branch))
		{
			Alert::error('Sucursal no encontrada.');
			return redirect(route('branches.index'));
		}

		return view('branches.show')->with('branch', $branch);
	}

	/**
	 * Show the form for editing the specified Branch.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$branch = Branch::find($id);

		if(empty($branch))
		{
			Alert::error('Sucursal no encontrada.');
			return redirect(route('branches.index'));
		}

		return view('branches.edit')->with('branch', $branch);
	}

	/**
	 * Update the specified Branch in storage.
	 *
	 * @param  int    $id
	 * @param CreateBranchRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateBranchRequest $request)
	{
		/** @var Branch $branch */
		$branch = Branch::find($id);

		if(empty($branch))
		{
			Alert::error('Sucursal no encontrada.');
			return redirect(route('branches.index'));
		}

		$branch->fill($request->all());
		$branch->save();

		Alert::message('Sucursal actualizada exitosamente.');

		return redirect(route('branches.index'));
	}

	/**
	 * Remove the specified Branch from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Branch $branch */
		$branch = Branch::find($id);

		if(empty($branch))
		{
			Alert::error('Sucursal no encontrada.');
			return redirect(route('branches.index'));
		}

		$branch->delete();

		Alert::message('Sucursal elimininada exitosamente.');

		return redirect(route('branches.index'));
	}
	public function getUsers(Request $request, $id)
	{
		if($request->ajax()){
			$users = User::users($id);
			return response()->json($users);

		}
	}

}

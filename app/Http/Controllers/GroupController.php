<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use App\Models\Branch;
use App\Models\Accredited;
use Carbon\Carbon;


class GroupController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('lock');
	}
	
	public function index(Request $request)
	{
		$query = Group::query();
		$columns = Schema::getColumnListing('$TABLE_NAME$');
		$attributes = array();
		$accrediteds = Accredited::all();
		foreach($columns as $attribute){
			if($request[$attribute] == true)
			{
				$query->where($attribute, $request[$attribute]);
				$attributes[$attribute] =  $request[$attribute];
			}else{
				$attributes[$attribute] =  null;
			}
		};

		$groups = $query->get();

		return view('groups.index')
		->with('groups', $groups)
		->with('attributes', $attributes)
		->with('accrediteds', $accrediteds);
	}

	/**
	 * Show the form for creating a new Group.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$branches = Branch::pluck('exercise', 'nomenclature');
		return view('groups.create')
		->with('branches', $branches);
	}

	/**
	 * Store a newly created Group in storage.
	 *
	 * @param CreateGroupRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateGroupRequest $request)
	{
		$input = $request->all();
		$date = new Carbon($request->input('date_create'));
		$count = Group::count();
		$number = Group::max('id') + 1;
		$input['date_create'] = $date;
		$input['folio'] = $date->year.$request->input('branch').'000'.$number;

		$group = Group::create($input);

		Alert::success('Grupo creado Exitosamente')->persistent('Cerrar');

		return redirect(route('groups.index'));
	}

	/**
	 * Display the specified Group.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$group = Group::find($id);

		if(empty($group))
		{
			Flash::error('Group not found');
			return redirect(route('groups.index'));
		}

		return view('groups.show')->with('group', $group);
	}

	/**
	 * Show the form for editing the specified Group.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$group = Group::find($id);

		if(empty($group))
		{
			Flash::error('Group not found');
			return redirect(route('groups.index'));
		}

		return view('groups.edit')->with('group', $group);
	}

	/**
	 * Update the specified Group in storage.
	 *
	 * @param  int    $id
	 * @param CreateGroupRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateGroupRequest $request)
	{
		/** @var Group $group */
		$group = Group::find($id);

		if(empty($group))
		{
			Flash::error('Group not found');
			return redirect(route('groups.index'));
		}

		$group->fill($request->all());
		$group->save();

		Flash::message('Group updated successfully.');

		return redirect(route('groups.index'));
	}

	/**
	 * Remove the specified Group from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Group $group */
		$group = Group::find($id);

		if(empty($group))
		{
			Flash::error('Group not found');
			return redirect(route('groups.index'));
		}

		$group->delete();

		Flash::message('Group deleted successfully.');

		return redirect(route('groups.index'));
	}

	public function addMember(Request $request)
	{	
		$input = $request->all();
		$group = Group::find($request->input('group_id'));
		echo $group->folio;
		foreach ($input['rows'] as $row) {
			$id_accredited = $row['id'];
			$accredited = Accredited::find($id_accredited);
			$accredited->groups()->attach($group);
		} 
		Alert::success('Se agregaron los acreditados al grupo.')->persistent('Cerrar');
		return redirect()->back();
	}
}

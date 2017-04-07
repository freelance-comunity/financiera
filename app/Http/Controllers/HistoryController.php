<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateHistoryRequest;
use App\Models\History;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class HistoryController extends AppBaseController
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
		$query = History::query();
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

        $histories = $query->get();

        return view('histories.index')
            ->with('histories', $histories)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new History.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('histories.create');
	}

	/**
	 * Store a newly created History in storage.
	 *
	 * @param CreateHistoryRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateHistoryRequest $request)
	{
        $input = $request->all();

		$history = History::create($input);

		Flash::message('History saved successfully.');

		return redirect(route('histories.index'));
	}

	/**
	 * Display the specified History.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$history = History::find($id);

		if(empty($history))
		{
			Flash::error('History not found');
			return redirect(route('histories.index'));
		}

		return view('histories.show')->with('history', $history);
	}

	/**
	 * Show the form for editing the specified History.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$history = History::find($id);

		if(empty($history))
		{
			Flash::error('History not found');
			return redirect(route('histories.index'));
		}

		return view('histories.edit')->with('history', $history);
	}

	/**
	 * Update the specified History in storage.
	 *
	 * @param  int    $id
	 * @param CreateHistoryRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateHistoryRequest $request)
	{
		/** @var History $history */
		$history = History::find($id);

		if(empty($history))
		{
			Flash::error('History not found');
			return redirect(route('histories.index'));
		}

		$history->fill($request->all());
		$history->save();

		Flash::message('History updated successfully.');

		return redirect(route('histories.index'));
	}

	/**
	 * Remove the specified History from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var History $history */
		$history = History::find($id);

		if(empty($history))
		{
			Flash::error('History not found');
			return redirect(route('histories.index'));
		}

		$history->delete();

		Flash::message('History deleted successfully.');

		return redirect(route('histories.index'));
	}
}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEconomicEvaluationRequest;
use App\Models\EconomicEvaluation;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class EconomicEvaluationController extends AppBaseController
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
		$query = EconomicEvaluation::query();
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

        $economicEvaluations = $query->get();

        return view('economicEvaluations.index')
            ->with('economicEvaluations', $economicEvaluations)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new EconomicEvaluation.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('economicEvaluations.create');
	}

	/**
	 * Store a newly created EconomicEvaluation in storage.
	 *
	 * @param CreateEconomicEvaluationRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEconomicEvaluationRequest $request)
	{
        $input = $request->all();

		$economicEvaluation = EconomicEvaluation::create($input);

		Flash::message('EconomicEvaluation saved successfully.');

		return redirect(route('economicEvaluations.index'));
	}

	/**
	 * Display the specified EconomicEvaluation.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$economicEvaluation = EconomicEvaluation::find($id);

		if(empty($economicEvaluation))
		{
			Flash::error('EconomicEvaluation not found');
			return redirect(route('economicEvaluations.index'));
		}

		return view('economicEvaluations.show')->with('economicEvaluation', $economicEvaluation);
	}

	/**
	 * Show the form for editing the specified EconomicEvaluation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$economicEvaluation = EconomicEvaluation::find($id);

		if(empty($economicEvaluation))
		{
			Flash::error('EconomicEvaluation not found');
			return redirect(route('economicEvaluations.index'));
		}

		return view('economicEvaluations.edit')->with('economicEvaluation', $economicEvaluation);
	}

	/**
	 * Update the specified EconomicEvaluation in storage.
	 *
	 * @param  int    $id
	 * @param CreateEconomicEvaluationRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEconomicEvaluationRequest $request)
	{
		/** @var EconomicEvaluation $economicEvaluation */
		$economicEvaluation = EconomicEvaluation::find($id);

		if(empty($economicEvaluation))
		{
			Flash::error('EconomicEvaluation not found');
			return redirect(route('economicEvaluations.index'));
		}

		$economicEvaluation->fill($request->all());
		$economicEvaluation->save();

		Flash::message('EconomicEvaluation updated successfully.');

		return redirect(route('economicEvaluations.index'));
	}

	/**
	 * Remove the specified EconomicEvaluation from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var EconomicEvaluation $economicEvaluation */
		$economicEvaluation = EconomicEvaluation::find($id);

		if(empty($economicEvaluation))
		{
			Flash::error('EconomicEvaluation not found');
			return redirect(route('economicEvaluations.index'));
		}

		$economicEvaluation->delete();

		Flash::message('EconomicEvaluation deleted successfully.');

		return redirect(route('economicEvaluations.index'));
	}
}

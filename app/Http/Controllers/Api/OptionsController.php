<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Option;

class OptionsController extends Controller
{
    /**
     * Show all Options
     *
     * @return Array
     */
    public function index()
    {
        return response()->json(Option::all());
    }

    /**
     * Show single option
     *
     * @param int $id
     * 
     * @return array
     */
    public function show($id)
    {
        $option = Option::find($id);

        if (is_null($option)) {
            return $this->sendError('Option not found.');
        }
        return $this->sendResponse($option->toArray(), 'Option retrieved successfully.');
    }

    /**
     * Save options with proper validation
     *
     * @param Request $request
     * 
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required',
            'value' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $option = Option::create($request->all());

        return response()->json($option, 201);
    }

    /**
     * Update options
     *
     * @param Request $request
     * @param Option $option
     * 
     * @return void
     */
    public function update(Request $request, Option $option)
    {
        $option->update($request->all());

        return response()->json($option, 200);
    }

    /**
     * Delete options
     *
     * @param Option $option
     * 
     * @return void
     */
    public function delete(Option $option)
    {
        $option->delete();

        return response()->json(null, 204);
    }
}

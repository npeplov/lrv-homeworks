<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;
use App\Models\Cars;
use Symfony\Component\HttpFoundation\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cars::paginate(20);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return Cars::findOrFail($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CarsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarsRequest $request)
    {
        return Cars::create($request->validated());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CarsRequest  $request
     * @param  Cars  $cars
     * @return bool
     */
    public function update(CarsRequest $request, Cars $cars)
    {
        $cars->fill($request->validated());
        return $cars->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars)
    {
        if ($cars->delete()) {
            return response(null, Response::HTTP_NO_CONTENT);
        }
        return null;
    }
}

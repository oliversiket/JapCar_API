<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Car;
use App\Brand;

class Cars extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Brand $brand)
    {
        return $brand->cars;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request, Brand $brand)
    {
        $car = new Car($request->only(["brand", "model", "generation"]));

        $brand->cars()->save($car);

        return $car;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Car::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // // find the current article
        // $car = Car::find($id);

        // // get the request data
        // $data = $request->only(["brand", "model", "generation"]);

        // // update the article
        // $car->fill($data)->save();

        // // return the updated version
        // return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $car = Car::find($id);
        // $car->delete();
    
        // // use a 204 code as there is no content in the response
        // return response(null, 204);
    }
}

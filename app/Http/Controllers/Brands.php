<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class Brands extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Brand::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get post request data for title and article
        $data = $request->only(["name", "description", "founded"]);
        die(var_dump($request));
        // create article with data and store in DB
        // $brand = Brand::create($data);

        // return the article along with a 201 status code
        return response($brand, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Brand::find($id);
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
        $brand = Brand::find($id);

        $data = $request->only(["name", "description", "founded"]);

        $brand->fill($data)->save();

        return $brand;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        // use a 204 code as there is no content in the response
        return response(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ApiResource;
use App\Models\ParseResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if($request->has("api-url") !== null) {
             $resource = ApiResource::create([
                "url" => $request->get("api-url"),
                "method" => $request->get("method"),
                "property" => $request->get("property")
            ]);
            $api_resource_id = $resource->id;
        }

        if($request->get("parse-url") !== null) {
            $resource = ParseResource::create([
                "url" => $request->get("parse-url"),
                "selector" => $request->get("selector")
            ]);
            $parse_resource_id = $resource->id;
        }

        Product::create([
            "title" => $request->title,
            "model_id" => $request->model_id,
            "shop_id" => $request->shop_id,
            "api_resource_id" => $api_resource_id ?? null,
            "parse_resource_id" => $parse_resource_id ?? null
        ]);

        return back()->with(["created" => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

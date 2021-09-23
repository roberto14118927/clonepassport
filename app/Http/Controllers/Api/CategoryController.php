<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryModel $categoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryModel $categoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryModel $categoryModel)
    {
        //
    }
}

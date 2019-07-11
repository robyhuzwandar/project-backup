<?php

namespace App\Http\Controllers;

use App\Category;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        $category = new Category([
            'name' => $name,
            'description' => $description
        ]);

        if($category->save()){
            $respon = [
                'msg' => 'Category created success',
                'Category' => $category
            ];

            return response()->json($respon, '201');
        }

        $respon = [
            'msg' => 'Category created failed'
        ];

        return response()->json($respon,'401');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $category = Category::all();

        $respone = [
            'msg' => ' show all Category',
            'Category' => $category
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $category = Category::find($id);

        $respone = [
            'msg' => 'Show Category success',
            'Category' => $category
        ];

        return response()->json($respone, '200');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $name = $request->input('name');
        $description = $request->input('description');

        $category = Category::findOrFail($id);

        $category->name = $name;
        $category->description = $description;

        if (!$category->update()){
            return response()->json([
                'msg' => 'Updating Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Category Updated Success',
            'Category' => $category
        ];

        return response()->json($respone, '200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if (!$category->delete()){
            return response()->json([
                'msg' => 'Category deleting Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Category deleted'
        ];

        return response()->json($respone, '200');
    }
}

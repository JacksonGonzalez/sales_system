<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $categories = Category::WHERE('name', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $categories = Category::WHERE('state', '=', '1')->get();
        }
         return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        Category::create($input);
        return response()->json(['res' => true, 'message' => 'Insert OK', 'category' => $input], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category )
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->validate([
            'name' => 'required|min:3|string',
            'description' => 'string',
            'state' => 'numeric'
        ]);
        // $input = $validatedData->all();
        $category->update($input);
        return response()->json(['res' => true, 'message' => 'Update OK', 'category' => $category], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(['res' => true, 'message' => 'Delete OK'], 200);
    }

    public function activate($id)
    {
        $category = Category::findOrFail($id);
        $category->state = '1';
        $category->save();
        
        return response()->json(['res' => true, 'message' => 'Activate OK', 'category' => $category], 200);
    }

    public function disable($id)
    {
        $category = Category::findOrFail($id);
        $category->state = '0';
        $category->save();
        
        return response()->json(['res' => true, 'message' => 'Disable OK', 'category' => $category], 200);
    }
}

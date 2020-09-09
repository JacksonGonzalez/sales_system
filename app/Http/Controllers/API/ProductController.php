<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $products = Product::WHERE('name', 'like', '%'.$request->txtBuscar.'%')
                    ->orWhere('code', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $products = Product::WHERE('state', '=', '1')->get();
        }
         return response()->json(['res' => true, 'products' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|min:3|string',
            'description' => 'string',
            'code' => 'Numeric|required',
            'idCategory' => 'Numeric|required',
            'sale_price' => 'Numeric|required',
            'stock' => 'Numeric|required',
        ]);
        $input = $request->all();
        Product::create($input);
        return response()->json(['res' => true, 'message' => 'Insert Product OK', 'Product' => $input], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(['res' => true, 'product' => $product], 200);
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
        $input = $request->validate([
            'name' => 'required|min:3|string',
            'description' => 'string',
            'code' => 'Numeric|required',
            'idCategory' => 'Numeric|required',
            'sale_price' => 'Numeric|required',
            'stock' => 'Numeric|required',
        ]);
        $input = $request->all();
        $product = Product::findOrFail($id);
        $product->update($input);
        return response()->json(['res' => true, 'message' => 'Update product OK', 'product' => $product], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['res' => true, 'message' => 'Product Delete OK'], 200);
    }

    public function activate($id)
    {
        $product = Product::findOrFail($id);
        $product->state = '1';
        $product->save();
        
        return response()->json(['res' => true, 'message' => 'Activate OK', 'product' => $product], 200);
    }

    public function disable($id)
    {
        $product = Product::findOrFail($id);
        $product->state = '0';
        $product->save();
        
        return response()->json(['res' => true, 'message' => 'Disable OK', 'product' => $product], 200);
    }
}

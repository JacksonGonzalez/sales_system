<?php

namespace App\Http\Controllers\API;

use App\Buy;
use App\buy_product;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $buys = Buy::WHERE('number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $buys = Buy::all();
        }
         return response()->json(['res' => true, 'buys' => $buys], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([ 
            'idSupplier' => 'required|Numeric',
            'number' => 'required|Numeric',
            'date_hour' => 'required|date', 
            'total' => 'Numeric',
            ]);
    
    
            $input = $request->all();
            $buy = Buy::create($input); 
            $success['buy'] =  $buy;
            return response()->json(['success'=>$success], 200); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = Buy::findOrFail($id);
        return response()->json(['res' => true, 'buy' => $buy], 200);
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
        $validator = $request->validate([ 
            'idSupplier' => 'required|Numeric',
            'number' => 'required|Numeric',
            'date_hour' => 'required|date', 
            'total' => 'Numeric',
            ]);


            $input = $request->all();
            $buy = Buy::findOrFail($id);
            $buy->update($input);
            return response()->json(['res' => true, 'message' => 'Update buy OK', 'buy' => $buy], 200);
    }


    public function addProduct(Request $request){
        $validator = $request->validate([ 
            'idBuy' => 'required|Numeric',
            'idProduct' => 'required|Numeric',
            'quantity' => 'required|Numeric', 
            'buy_price' => 'required|Numeric',
        ]);

        $input = $request->all();
        $buy_product = buy_product::create($input); 
        $success['buy'] =  $buy_product;

        $quantity = $input['quantity'];
        $idProduct = $input['idProduct'];
        $idBuy = $input['idBuy'];

        $product = Product::findOrFail($idProduct);
        $stock = $product['stock'];
        $product['stock'] = $quantity + $stock;
        $product->update();

        

        

        return response()->json(['success'=>$success], 200); 

    }


    public function adjustValue(Request $request){
        // $idProduct = $request['idProduct'];
        $idBuy = $request['idBuy'];
        $total = 0;
        $buysProducts = buy_product::WHERE('idBuy', '=', $idBuy)->get();

        foreach ($buysProducts as $bp) {
            $cantidad = $bp['quantity'];
            $precio = $bp['buy_price'];

            $total = ($cantidad * $precio) + $total;
        }
        // return $total;
            
        $buy = Buy::findOrFail($idBuy);
        $buy['total'] = $total;
        $buy->update();

        $success['buy'] =  $buy;
        return response()->json(['success'=>$success], 200); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buy::destroy($id);
        return response()->json(['res' => true, 'message' => 'Buy Delete OK'], 200);
    }
}

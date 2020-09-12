<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Order;
use App\order_product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $orders = Order::WHERE('serial', 'like', '%'.$request->txtBuscar.'%')
                        ->orWHERE('invoice_number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $orders = Order::WHERE('state', '=', 'PED')->get();
        }
         return response()->json(['res' => true, 'orders' => $orders], 200);
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
            'idUser' => 'required|Numeric',
            'idClient' => 'required|Numeric',
            'invoice_type' => 'required|String', 
            'date_hour' => 'required|date', 
            'serial' => 'required|String', 
            'invoice_number' => 'required|Numeric', 
            'tax' => 'Numeric',
            'total' => 'Numeric',
        ]);
    
    
            $input = $request->all();
            $order = Order::create($input); 
            $success['order'] =  $order;
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
        $order = Order::findOrFail($id);
        return response()->json(['res' => true, 'order' => $order], 200);
    }

    public function addProduct(Request $request){
        $validator = $request->validate([ 
            'idOrder' => 'required|Numeric',
            'idProduct' => 'required|Numeric',
            'quantity' => 'required|Numeric', 
            'price' => 'required|Numeric',
        ]);

        $input = $request->all();
        $order_product = order_product::create($input); 
        $success['order_product'] =  $order_product;


        return response()->json(['success'=>$success], 200); 

    }


    public function saleOrder(Request $id)
    {
        $order = Order::findOrFail($id);
        $order['state'] = 'VED';
        $order->update();
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

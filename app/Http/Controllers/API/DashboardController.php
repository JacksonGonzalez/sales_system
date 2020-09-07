<?php

namespace App\Http\Controllers\API;

use App\Buy;
use App\Client;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    

    public function lastOrders(){
        $orders = Order::latest()->take(5)->get();
        return response()->json(['res' => true, 'orders' => $orders], 200);
    }

    public function countCharts(){
        $product = Product::all()->count();
        $buy = Buy::all()->count();
        $sale = Order::WHERE('state', 'like', '%VEN%')->get()->count();
        $client = Client::all()->count();
        return response()->json(['res' => true, 'products' => $product, 'buys' => $buy, 'sales' => $sale, 'clients' => $client], 200);
    }


}

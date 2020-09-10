<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $clients = Client::WHERE('name', 'like', '%'.$request->txtBuscar.'%')
                    ->orWhere('document_number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $clients = Client::all();
        }
         return response()->json(['res' => true, 'clients' => $clients], 200);
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
            'name' => 'required|string|min:3',
            'document_type' => 'required|String|max:3',
            'document_number' => 'required|Numeric|min:7',
            'address' => 'String',
            'phone' => 'Numeric',
            'email' => 'email', 
            ]);
    
    
            $input = $request->all();
            $client = Client::create($input); 
            $success['client'] =  $client;
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
        $client = Client::findOrFail($id);
        return response()->json(['res' => true, 'client' => $client], 200);
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
            'name' => 'required|string|min:3',
            'document_type' => 'required|String|max:3',
            'document_number' => 'required|Numeric|min:7',
            'address' => 'String',
            'phone' => 'Numeric',
            'email' => 'email', 
            ]);
    
    
            $input = $request->all();
            $client = Client::findOrFail($id);
            $client->update($input);
            return response()->json(['res' => true, 'message' => 'Update client OK', 'client' => $client], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return response()->json(['res' => true, 'message' => 'Client Delete OK'], 200);
    }
}

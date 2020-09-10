<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $suppliers = Supplier::WHERE('name', 'like', '%'.$request->txtBuscar.'%')
                    ->orWhere('document_number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $suppliers = Supplier::all();
        }
         return response()->json(['res' => true, 'suppliers' => $suppliers], 200);
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
            'contact' => 'String',
            ]);
    
    
            $input = $request->all();
            $supplier = Supplier::create($input); 
            $success['supplier'] =  $supplier;
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
        $supplier = Supplier::findOrFail($id);
        return response()->json(['res' => true, 'supplier' => $supplier], 200);
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
            'contact' => 'String',
            ]);

        $input = $request->all();
        $supplier = Supplier::findOrFail($id);
        $supplier->update($input);
        return response()->json(['res' => true, 'message' => 'Update Supplier OK', 'supplier' => $supplier], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return response()->json(['res' => true, 'message' => 'Supplier Delete OK'], 200);
    }
}

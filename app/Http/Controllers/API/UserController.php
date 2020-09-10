<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $users = User::WHERE('name', 'like', '%'.$request->txtBuscar.'%')
                    ->orWhere('document_number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $users = User::all();
        }
         return response()->json(['res' => true, 'users' => $users], 200);
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
            'last_name' => 'required|String|min:3',
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password',
            'idRol' => 'required|String',
            'document_type' => 'required|String|max:3',
            'document_number' => 'required|Numeric|min:7',
            'address' => 'String',
            'phone' => 'Numeric',
            'email' => 'required|string',
            'avatar' => 'String',
            ]);
    
    
            $input = $request->all(); 
            $input['password'] = bcrypt($input['password']); 
            $user = User::create($input); 
            $success['token'] =  $user->createToken('sales_system')-> accessToken; 
            $success['user'] =  $user;
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
        $user = User::findOrFail($id);
        return response()->json(['res' => true, 'user' => $user], 200);
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
            'last_name' => 'required|String|min:3',
            'email' => 'required|email', 
            'idRol' => 'required|String',
            'document_type' => 'required|String|max:3',
            'document_number' => 'required|Numeric|min:7',
            'address' => 'String',
            'phone' => 'Numeric',
            'email' => 'required|string',
            'avatar' => 'String',
            ]);
    
    
            $input = $request->all();
            $user = User::findOrFail($id);
            $user->update($input);
            return response()->json(['res' => true, 'message' => 'Update user OK', 'user' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['res' => true, 'message' => 'User Delete OK'], 200);
    }
}

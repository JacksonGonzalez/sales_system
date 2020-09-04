<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator as ValidationValidator;

class AuthController extends Controller
{

    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }


    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('sales_system')-> accessToken; 
            return response()->json(['success' => $success, 'messages' => 'Welcome', 'user' => $user], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }


    public function logout(){ 
        
        $user = Auth::user()->token();
        $user->delete();

        return response()->json(['success'=> True,'message' => 'Successfully logged out'], 200);
    }

    public function checkToken(){
        return response()->json(['success' => true], 200);
    }

}

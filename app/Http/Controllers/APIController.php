<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Hash;
use JWTAuth;
use Exception;
class APIController extends Controller
{
	

    public function register(Request $request)
    {        
    	// $input = $request->all();
    	// $input['password'] = Hash::make($input['password']);
    	// User::create($input);
        return response()->json(['result'=>$input]);
    }
    

    public function login(Request $request)
    { 
    	$input = $request->all();
    	if (!$token = JWTAuth::attempt($input)) {
            return response()->json(['result' => 'wrong email or password.']);
        }
            $user = JWTAuth::toUser($token);
        	return response()->json(['result' => $user,
                                     'token' => $token]);
            
    }

    

    public function get_user_details(Request $request)
    {
    	
    	$input = JWTAuth::getToken();
        $user = JWTAuth::toUser($input);
        return response()->json(['result' => $user]);
    }
}
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
      
    	 $input = $request->all();
    	 $input['password'] = Hash::make($input['password']);
    	 User::create($input);
        return response()->json(['result'=>$input]);
    }
    

    // public function login(Request $request)
    // { 
    // 	$input = $request->all();
    // 	if (!$token = JWTAuth::attempt($input)) {
    //         return response()->json(['result' => 'wrong email or password.']);
    //     }
    //         $user = JWTAuth::toUser($token);
    //     	return response()->json([
    //                                  'token' => $token]);
            
    // }

    

    public function get_user_details(Request $request)
    {
    	
    	$input = JWTAuth::getToken();
        $user = JWTAuth::toUser($input);
        return response()->json(['result' => $user]);
    }

    // private $user;
    // public function __construct(User $user){
    //     $this->user = $user;
    // }
   
    // public function register(Request $request){
    //     $user = $this->user->create([
    //       'user_name' => $request->get('user_name'),
    //       'email' => $request->get('email'),
    //       'password' => bcrypt($request->get('password'))
    //     ]);
    //     return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    // }
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    // public function getAuthUser(Request $request){
    //     $user = JWTAuth::toUser($request->token);
    //     return response()->json(['result' => $user]);
    // }
}
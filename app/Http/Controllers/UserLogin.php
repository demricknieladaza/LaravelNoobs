<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserAccountsModel;
use Validator;
use Auth;
use Hash;

class UserLogin extends Controller
{
    public function checklogin(Request $request)
    {
    	$this->validate($request, [
    		'email'	=> 'required',
    		'password'	=> 'required',
    	]);
    	$user = DB::table('user_accounts_models')->where('email', $request->get('email'))->first();
    	if($user){
    		if (Hash::check($request->get('password'), $user->password)) {
    		    return response()->json(['success'=> "naa"]);
    		}
    		else{
    			return response()->json(['success'=> "sayop pass"]);
    		}
    	}
    	else{
    		return response()->json(['success'=> "wala"]);
    	}
    	
    	// $user_data = new UserAccountsModel([
    	// 	'email'	=> $request->get('lemail'),
    	// 	'password'	=> $request->get('lpassword')
    	// ]);

    	// if(Auth::attempt($user_data))
    	// {
    	// 	return response()->json(['success'=>'Success']);
    	// }
    	// else
    	// {
    	// 	return response()->json(['success'=>'Wrong Login Details']);
    	// }
    }
}

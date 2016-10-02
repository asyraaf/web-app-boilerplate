<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class AccountController extends Controller
{
    public function activate(Request $request, $token)
    {
    	$userToken = \App\UserToken::where('token', $token)->first();

    	if($userToken) {
    		$userToken->status = 1;
    		$userToken->save();

    		Auth::loginUsingId($userToken->user_id); // auto login

    		return redirect('/home')->with('message', 'Your account has been activated!');
    	} else {
    		return redirect('/login')->with('message', 'Invalid activation account')->with('error', true);
    	}
    }
}

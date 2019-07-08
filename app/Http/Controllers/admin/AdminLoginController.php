<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;

class AdminLoginController extends Controller
{
    // use notifier;
	protected $redirectTo = 'admin/admin';
	public function __construct(){
		$this->middleware('guest:admin')->except('logout');
	}
    public function showLoginForm(){
    	return view('admin.admin-login');
    }

    public function login(Request $request){
    	$this->validate($request,[
    		'email'=>'email|required',
    		'password'=>'required|string|min:6',
    	]);
    	if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)) {
    		return redirect()->intended(route('admin'));
    	}

    	return redirect()->back()->withInput($request->only('email','remember'));
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin-login');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Client;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.index');   
    }
    public function user()
    {
        $user = Client::all();
        return view('admin.admin-user')->with('datas', $user);   
    }
    
    
}

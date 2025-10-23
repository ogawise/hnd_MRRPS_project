<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;
use App\Mail\Mrrpsmail;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function login_submit(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $cridentials=[
            'email'=>$request->email,
            'password'=>$request ->password,
        ];
        if(Auth::guard('admin')->attempt($cridentials)){
            return redirect()->route('admin_dashboard')->with('success','Login Successfully');

        } else{
             return redirect()->route('admin_login')->with('error','Invalid Cridentials');
        }
    }
}

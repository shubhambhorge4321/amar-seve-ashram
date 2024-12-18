<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    
    public function index()
    {
        return view("auth.login");
        
    }
    public function register_view()
    {
        return view("auth.register");
    }
    public function login_cancel(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
            // other validation rules...
        ]);
        
        if(\Auth::attempt($request->only('email',"password")))
        {
            return redirect("admin/admindashboard");
        }

        return back()->withErrors(['error' => 'Login details are not valid']);

    }
    public function login(Request $request)
    {
        
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
            
        ]);
        
        if(\Auth::attempt($request->only('email',"password")))
        {
            return redirect()->route('admin.admindashboard');
        }

        return back()->withErrors(['error' => 'Login details are not valid']);

    }
    public function register_post_cancel(Request $request)
    {
        // dd($request);
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        User::create([
            "name" =>$request->first_name ." ". $request->last_name,
            "email" => $request->email,
            "password" => \Hash::make($request->password),
        ]);
        if(\Auth::attempt($request->only('email',"password")))
        {
            return redirect("admin/admindashboard")->withError("Error");
        }
        return redirect("adminregister")->withError("Error");
    }
    public function register_post(Request $request)
    {
        // dd($request);
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:7",
            "password_confirmation" => "required|same:password",
        ]);

        User::create([
            "name" =>$request->first_name ." ". $request->last_name,
            "email" => $request->email,
            "password" => \Hash::make($request->password),
        ]);
        if(\Auth::attempt($request->only('email',"password")))
        {
            return redirect("admin/admindashboard")->withError("Error");
        }
        return redirect("adminregister")->withError("Error");
    }


    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect("home");
    }

    public function gallery_view()
    {
        return view("gallery");
    }
    public function admin_index(){
        
        return view("admin.login");
    }
}

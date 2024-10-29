<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function check(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // $mem = member::where('email','=', $request->email)
            //     ->where('password','=', $request->password)
            //     ->get();
                $level = Auth::user()->level;
                if ($level =='admin1') {
                    
                    return redirect()->intended('admin/');
                }
                if ($level =='farmer') {
                    
                    return redirect()->intended('farmer/');
                }
                return redirect()->intended('consumer/dashboard');

        }
        
        return redirect('/login')->with(["status" => "Wrong email  and password combination"]);
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('email');
            // $count = member::where('email','=', $request->email)
            //     ->where('password','=', $request->password)
            //     ->count();
            //     if ($count > 0) {
            //         $sel = member::where('email','=', $request->email)
            //         ->where('password','=', $request->password)->limit(1)->first();
                  
            //         session(['user_id' => $sel->id]);
            //         session(['email' => $sel->email]);
            //         session(['password' => $sel->password]);
            //         return redirect('/dashboard');
               // }

    }
}

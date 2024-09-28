<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function check(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $count = member::where('email','=', $request->email)
                ->where('password','=', $request->password)
                ->count();
                if ($count > 0) {
                    $sel = member::where('email','=', $request->email)
                    ->where('password','=', $request->password)->limit(1)->first();
                  
                    session(['user_id' => $sel->id]);
                    session(['email' => $sel->email]);
                    session(['password' => $sel->password]);
                    return redirect('/dashboard');
                }
                return redirect('/login')->with(["status" => "Wrong email  and password combination"]);

    }
}

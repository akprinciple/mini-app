<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\member;
use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function store(Request $request) : RedirectResponse {
        $member = new Users;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'c_password' => 'required|same:password'
        ]);
        
        $member->name = $request->name;
        $member->password = bcrypt($request->password);
        $member->email = $request->email;
        $member->save();

        return redirect('/signup')->with(["status" => "Registration successful! You will be redicted in 3s"]);
        
        

    }
}

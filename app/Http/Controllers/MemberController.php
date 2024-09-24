<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\member;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function store(Request $request) : RedirectResponse {
        $member = new member;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password'
        ]);
        
        $member->name = $request->name;
        $member->password = $request->password;
        $member->email = $request->email;
        $member->save();

        return redirect('/signup')->with(["status" => "Registration successful <script></script>"]);
        
        

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class registerController extends Controller
{
    public function register(Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'password' => 'required|min:8',
        ]);

        try {
            $user = Users::create([
                'name' =>$data['name'],
                'email' =>$data['email'],
                'password' =>Hash::make($data['password'])
            ]);
            // return response()->json(['status' => 'Registration successful'], 201);
            $request->flash();
        } catch (\Throwable $th) {
            return response()->json(['status' => 'Registration failed', 'error' => $th->getMessage()], 500);

        }
       
    }
}

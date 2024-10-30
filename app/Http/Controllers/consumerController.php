<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class consumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allconsumers = User::where('level', 'consumer')->get()->sortByDesc('id');
        return view('admin.allconsumers', ['consumers' => $allconsumers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->where('level', 'consumer')->first();
        $count = User::where('id', $id)->where('level', 'consumer')->count();
        if ($count < 1) {
        return view('admin.singleConsumer', ['msg'=>"User not Found!"]);
        }
        return view('admin.singleConsumer', ['key'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

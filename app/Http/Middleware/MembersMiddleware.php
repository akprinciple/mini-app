<?php

namespace App\Http\Middleware;

use App\Models\member;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MembersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login?1');
        }
        $level = Auth::user()->level;

        if ($level != 'consumer' && $level != 'admin') {
            return redirect('/login?2');

        }
    //     $id = auth()->id();
    //     $email = auth()->user()->email;
    //     $password = auth()->user()->password;
    //     $email = session('email');
    //     $password = session('password');
    //    $count =  User::where(['email'=>$email, 'password'=>$password])->count();
    //     if ($count < 1) {
    //         return redirect('/login?2')->with(["error" => "Please login!"]);
    //     }
        return $next($request);
    }
}

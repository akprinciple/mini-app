<?php

namespace App\Http\Middleware;

use App\Models\member;
use Closure;
use Illuminate\Http\Request;
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
        if (!session('email')&& !session('password')) {
            return redirect('/login');
        }
        $email = session('email');
        $password = session('password');
       $count =  member::where(['email'=>$email, 'password'=>$password])->count();
        if ($count > 0) {
            return redirect('/login')->with(["status" => "Please login!"]);
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::check()){
            $user = Auth::user();
            if($user->role->name == 'user'){
                return redirect()->route('user.index');
            }
        // }else{
        //     return redirect()->route('auth.login');
        // }
        
        return $next($request);
    }
}
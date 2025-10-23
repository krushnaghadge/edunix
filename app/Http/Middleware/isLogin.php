<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        // जर session मध्ये 'id' नसेल म्हणजे user login नाही
        if (!$request->session()->has('id')) {
            return redirect('/login')->with('error', 'Please log in first.');
        }

        // login असल्यास request पुढे पाठवा
        return $next($request);
    }
}

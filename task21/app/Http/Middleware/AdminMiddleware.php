<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // cek apakah pengguna terautentikasi dan memiliki role 'admin'
        if ( Auth::check() & Auth::user()->role == 'admin' ) {
            return $next($request);
        }

        // jika tidak, redirect ke halaman utama
        return redirect('/')->with('error', 'kamu tidak memiliki akses sebagai admin!');
    }
}

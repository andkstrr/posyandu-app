<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna login dan memiliki role 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect jika tidak memenuhi syarat
        return redirect('/')->with('failed', 'Anda tidak memiliki akses ke halaman ini.');
    }
}


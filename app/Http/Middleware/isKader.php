<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsKader
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna login dan memiliki role 'kader' atau 'admin'
        if (auth()->check() && (auth()->user()->role === 'kader' || auth()->user()->role === 'admin')) {
            return $next($request);
        }

        // Redirect jika tidak memenuhi syarat
        return redirect('/')->with('failed', 'Anda tidak memiliki akses ke halaman ini.');
    }
}

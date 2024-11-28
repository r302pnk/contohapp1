<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{

    public function handle(Request $request, Closure $next): Response
    {
        $admin = session("admin");
        if($admin){
            return $next($request);
        }else{
            return abort(403, "Halaman tidak boleh diakses");
        }
    }
}

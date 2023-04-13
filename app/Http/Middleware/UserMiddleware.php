<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if (!$request->session()->has('user')) {
                // Redirigimos al usuario a la página de inicio de sesión
                return redirect()->route('login')->with('error', 'No tienes permisos de administrador para ver esta página!');
            }
    
            return $next($request);
        }
}

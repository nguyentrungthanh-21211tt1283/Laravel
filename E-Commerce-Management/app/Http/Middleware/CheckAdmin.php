<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Giả sử bạn có cột 'role' trong bảng users để kiểm tra vai trò
        if (auth()->user() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập.');
    }
}

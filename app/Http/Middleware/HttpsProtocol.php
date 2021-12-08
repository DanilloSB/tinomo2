<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HttpsProtocol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { 
        if (!app()->environment('local')) {
        // for Proxies
        Request::setTrustedProxies([$request->getClientIp()], 
            Request::HEADER_X_FORWARDED_ALL);

        if (!$request->isSecure()) {
            return redirect()->secure($request->getRequestUri());
        }
    }

    return $next($request);
}}
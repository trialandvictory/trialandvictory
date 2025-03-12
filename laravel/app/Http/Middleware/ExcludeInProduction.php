<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExcludeInProduction {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (\App::environment('production')) {
            // You can return a 404, or redirect, or even a custom response
            return abort(404); // example: abort with a 404 error
        }

        return $next($request);
    }
}

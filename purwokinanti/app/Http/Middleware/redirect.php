<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class redirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (parse_url(request()->url(), 0) == 'http') {
            $path = request()->path();
            return redirect('https://purwokinanti.web.id' . '/' . $path);
        }
        return $next($request);
    }
}

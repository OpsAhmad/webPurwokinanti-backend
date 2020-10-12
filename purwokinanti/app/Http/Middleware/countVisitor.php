<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;

class countVisitor
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

        if (session()->has('visits') == null) {
            session()->put('visits', true);
            $count = Visitor::where('id', 1)->first()->count;
            Visitor::where('id', 1)->update([
                'count' => $count + 1
            ]);
        }

        return $next($request);
    }
}

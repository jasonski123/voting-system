<?php

namespace App\Http\Middleware;

use App\Models\Election;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckElection
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
        if (! Election::latest()->first()->is_election) {
            abort(404);
        }

        if (Carbon::now() >= Carbon::parse('2023-03-30')) {
            abort(404);
        } else {
            return $next($request);
        }
    }
}

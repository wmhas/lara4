<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class GroupLogPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::info('log middleware grouplogpage');

        return $next($request);
    }
}

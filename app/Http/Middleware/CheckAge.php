<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class CheckAge
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
        Log::info("check middle ware");
        echo "check middle ware";

        Log::info('check age -> age = '. $request->age);

        if($request->age<14){

            return redirect("login");
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Subscribed
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
        $roleId = $request->user()->roles()->first()->id;
        $isSubscribed = $request->user()->subscriptions()->orderBy('id','DESC')->count();
        if ($request->user() && $isSubscribed < 1 && $roleId == 4){
            return redirect('plans');
        }

        return $next($request);
    }
}

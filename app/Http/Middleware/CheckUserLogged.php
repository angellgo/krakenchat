<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserLogged
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
        if($request -> users() -> genero_id >= 0){
            return $next($request);
        }else{
            return redirect("/");
        }
    }
}

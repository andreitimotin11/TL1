<?php

namespace App\Http\Middleware;

use Closure;

class Mymiddleware
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
//    	var_dump($request->route());die;
    	/*if( $request->route('id') != 'pages' ){
    		return redirect()->route('home');
	    };*/
    	echo 'Middle ';
        return $next($request);
    }
}

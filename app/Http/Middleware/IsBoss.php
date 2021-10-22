<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsBoss
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
          if (Auth::user() &&  Auth::user()->role == 3) {
               return $next($request);
          }


          return redirect()->route('main_login_form_screen',['id'=>3])->with('no_role','riaditeľ');
        
      }
}

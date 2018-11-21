<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$rights)
    {
      if (!$request->user()->role->hasAnyRight($rights)) {
        return abort(401, 'Unautorisiert');
      }
        
      return $next($request);
    }
}

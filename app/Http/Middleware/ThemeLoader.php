<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Theme;

class ThemeLoader
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
      // if ($request->user() !== null && $request->user()->theme !== null) {
      //   View::share('theme', $this->themeNameToPath($request->user()->theme->name));
      // } else {
      //   View::share('theme', $this->themeNameToPath(Theme::where('default', true)->first()->name));
      // }

      View::share('theme', 'default');

      return $next($request);
    }

    private function themeNameToPath($theme) {
      return strtolower(str_replace(' ', '_', $theme));
    }
}

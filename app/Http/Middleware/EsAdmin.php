<?php

namespace App\Http\Middleware;

use Closure;

class EsAdmin
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
        if (is_null($request->route('admin'))) {
          // code...
          return redirect('fruteria/manzanas');
        }
        return $next($request);
    }
}

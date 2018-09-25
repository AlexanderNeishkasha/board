<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuthor
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
        $ad = \App\Ad::find($request->route('id'));
        if ($ad != null && $ad->author_name == Auth::user()->name) {
            return $next($request);
        } else {
            return abort(403);
        }
    }
}

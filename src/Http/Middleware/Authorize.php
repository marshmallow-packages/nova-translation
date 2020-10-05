<?php

namespace Marshmallow\NovaTranslation\Http\Middleware;

use Marshmallow\NovaTranslation\NovaTranslation;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaTranslation::class)->authorize($request) ? $next($request) : abort(403);
    }
}

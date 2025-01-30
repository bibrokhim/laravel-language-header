<?php

namespace Bibrokhim\LaravelLanguageHeader\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetAppLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = request()->header('Accept-Language', app()->getLocale());

        if (in_array($locale, ['en', 'ru', 'uz'])) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}

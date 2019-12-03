<?php

    namespace App\Http\Middleware;

    use Closure;
    use App;

    class Localize
    {
        public function handle($request, Closure $next)
        {
            // app()->setLocale($request->getPreferredLanguage(config('app.languages')));
            // return $next($request);

            if (session()->has('locale')) {
                App::setLocale(session()->get('locale'));
            }
            return $next($request);
        }
    }

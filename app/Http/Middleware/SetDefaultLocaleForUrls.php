<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetDefaultLocaleForUrls
{
    protected $supported_languages = ['en', 'ar'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('locale')) {
            session(['locale' => $request->getPreferredLanguage($this->supported_languages)]);
        }

        app()->setLocale(session('locale'));

        isset($request->user)?URL::defaults(['locale' => $request->user()->locale]):'';

        return $next($request);
    }
}

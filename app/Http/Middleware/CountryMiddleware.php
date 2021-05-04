<?php

namespace App\Http\Middleware;

use App\Country;
use Closure;
use Request;
use Route;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

   $countryShortcode = $request->route('country');

        $country = Country::where('country_shortcode', '=', $countryShortcode)->where('is_active', '=', 1)->first();
        $ip = $request->ip();
        $data = \Location::get($ip);
       
        $request->session()->put('country', $data->countryCode);
        $request->session()->save();
        if ($country === null) {
            return redirect(url('/error'));
        }

        if ($data->countryCode == $country->country_shortcode) {
            $request->session()->put('country', $country->country_shortcode);
            $request->session()->save();
            return $next($request);
        } else {

            return redirect(url('/error'));
        }

    }
}

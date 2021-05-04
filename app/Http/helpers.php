<?php
if (! function_exists('country')) {
    function country()
    {
        if (\request()->session()->get('country')){
            return (\request()->session()->get('country'));
        }else{
            $ip = \request()->ip();
            $data = \Location::get($ip);
            return ($data->countryCode);
        }
    }
}

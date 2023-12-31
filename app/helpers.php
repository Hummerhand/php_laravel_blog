<?php

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;

if(!function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}

if(!function_exists('alert')) {
    function alert(string $name)
    {
        session(['alert' => $name]);
    }
}

if(!function_exists('validate')) {
    function validate(array $attributes, array $rules)
    {
        return validator($attributes, $rules)->validate();
    }
}
<?php

if (!function_exists('custom_asset')) {
    /**
     * Generate a custom asset URL for resolving path issues.
     *
     * @param string $path
     * @return string
     */
    function custom_asset($path)
    {
        return asset('storage/public/images/' . $path);
    }
    
}


if (!function_exists('helloworld')) {
    function helloworld($path)
    {
        return 'hello world';
    }
}
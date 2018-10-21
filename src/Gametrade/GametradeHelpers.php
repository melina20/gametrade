<?php

if (!function_exists('base_url')) {

    function base_url($uri)
    {
        $baseUrl = 'http://localhost/gametrade/'.$uri;

        return $baseUrl;
    }
}
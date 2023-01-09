<?php

if (! function_exists('tomorrow')) {
    function tomorrow(){
        return now()->tomorrow();
    }
}

if (! function_exists('isLoggedIn')) {
     function isLoggedIn()
    {
        return auth()->check();
    }
}

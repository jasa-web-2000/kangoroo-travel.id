<?php

if (! function_exists('developer')) {
    function developer()
    {
        return 'dionzebua.com';
    }
}

if (! function_exists('email')) {
    function email()
    {
        return 'info@dionzebua.com';
    }
}

if (! function_exists('phone')) {
    function phone()
    {
        return '+62 895-3487-78041';
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp()
    {
        $cleaned_number = str_replace(['-', '+', ' '], '', phone());
        return "https://api.whatsapp.com/send/?phone=" . $cleaned_number . "&text=Halo+admin+" . request()->fullUrl() . "&type=phone_number&app_absent=0";
    }
}

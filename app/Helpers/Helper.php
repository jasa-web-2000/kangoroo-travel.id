<?php


if (! function_exists('developer')) {
    function developer()
    {
        return [
            "name" => "Dion Zebua",
            "url" => "https://dionzebua.com"
        ];
    }
}

if (! function_exists('email')) {
    function email()
    {
        return 'admin@kangoroo-travel.id';
    }
}

if (! function_exists('phone')) {
    function phone()
    {
        return '+62 816-147-5333';
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp()
    {
        $cleaned_number = str_replace(['-', '+', ' '], '', phone());
        return "https://api.whatsapp.com/send/?phone=" . $cleaned_number . "&text=Halo+admin+" . request()->fullUrl() . "&type=phone_number&app_absent=0";
    }
}

if (! function_exists('alternate_name')) {
    function alternate_name()
    {
        return ["K-T", "KT", env('APP_NAME')];
    }
}

if (! function_exists('tagline')) {
    function tagline()
    {
        return "Travel Cirebon Jakarta Termurah";
    }
}

if (! function_exists('postal_address')) {
    function postal_address()
    {
        return json_encode([
            'streetAddress' => "F98F+VJX, Jl. Jengkok Raya, Jengkok, Kec. Kertasemaya, Kabupaten Indramayu, Jawa Barat 45274",
            'addressLocality' => "Kertasemaya",
            'addressRegion' => "Jawa Barat",
            'postalCode' => "45274",
            'addressCountry' => "ID",
            'linkAdress' => "https://maps.app.goo.gl/MkiyPUobYLumBf8m7",
            'googleMapIframe' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9123034156287!2d108.36999142695309!3d-6.532759399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec3072b422127%3A0x987626fca8030d9e!2sTOKO%20FENI!5e0!3m2!1sid!2sid!4v1755444433016!5m2!1sid!2sid",
        ]);
    }
}

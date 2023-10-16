<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] == $value;
}


// Read the domain name of the current page
$domain = $_SERVER['HTTP_HOST'];
//Read the requested resource
$resource = $_SERVER['REQUEST_URI'];
// Find out the protocol of the current url
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
$protocol = "https";
else
$protocol = "http";

// Combine all parts to get the full URL address
$currentpageurl = $protocol."://".$domain.$resource;

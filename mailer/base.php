<?php

function base_url()
{
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}/";

    $path = strpos($actual_link, 'localhost') > 0 ? $actual_link . 'Aves' : $actual_link;
    $path .= '/';
    return $path;
}

<?php

use Text\Format;

if (! function_exists('upper')) {
    function upper($text)
    {
        return Format::upperText($text);
    }
}
if (! function_exists('lower')) {
    function lower($text)
    {
        return Format::lowerText($text);
    }
}

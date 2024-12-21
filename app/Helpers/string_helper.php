<?php

if (!function_exists('pascalize')) {
    function pascalize($string) {
        $string = strtolower($string);
        return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string)));
    }
}

<?php

// Türkçe karakterleri destekleyen pascalize fonksiyonu
if (!function_exists('pascalize')) {
    function pascalize($string)
    {
        // Türkçe karakter desteği ile kelimenin ilk harfini büyük yapma
        return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
    }
}

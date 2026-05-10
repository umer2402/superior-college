<?php

if (!function_exists('superior_normalize_color')) {
    function superior_normalize_color(string $value): string
    {
        $value = trim($value);

        if ($value === '') {
            return '#008283';
        }

        if ($value[0] !== '#') {
            $value = '#' . $value;
        }

        return preg_match('/^#[0-9a-fA-F]{6}$/', $value) ? strtoupper($value) : '#008283';
    }
}

if (!function_exists('superior_mix_color')) {
    function superior_mix_color(string $baseHex, string $mixHex, float $ratio): string
    {
        $ratio = max(0, min(1, $ratio));
        $baseHex = ltrim(superior_normalize_color($baseHex), '#');
        $mixHex = ltrim(superior_normalize_color($mixHex), '#');

        $mixed = '#';

        for ($i = 0; $i < 3; $i++) {
            $base = hexdec(substr($baseHex, $i * 2, 2));
            $mix = hexdec(substr($mixHex, $i * 2, 2));
            $value = (int) round(($base * (1 - $ratio)) + ($mix * $ratio));
            $mixed .= str_pad(dechex($value), 2, '0', STR_PAD_LEFT);
        }

        return strtoupper($mixed);
    }
}

$colorFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'color.txt';
$sitePrimaryColor = superior_normalize_color(is_file($colorFile) ? (string) file_get_contents($colorFile) : '#008283');
$sitePrimaryDark = superior_mix_color($sitePrimaryColor, '#000000', 0.18);
$sitePrimaryLight = superior_mix_color($sitePrimaryColor, '#FFFFFF', 0.18);
$sitePrimarySurface = superior_mix_color($sitePrimaryColor, '#FFFFFF', 0.92);
$sitePrimaryBorder = superior_mix_color($sitePrimaryColor, '#FFFFFF', 0.72);

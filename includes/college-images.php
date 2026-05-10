<?php

function collegeImage(string $file): string
{
    return 'collegeImages/' . rawurlencode($file);
}

function collegeImageVariant(string $file): array
{
    static $variants = [
        'WhatsApp Image 2026-05-10 at 10.01.30 AM.jpeg' => [
            'frame' => 'portrait',
            'fit' => 'contain',
            'focus' => 'top',
        ],
        'WhatsApp Image 2026-05-10 at 10.01.31 AM.jpeg' => [
            'frame' => 'poster',
            'fit' => 'contain',
            'focus' => 'center',
        ],
        'WhatsApp Image 2026-05-10 at 10.01.32 AM.jpeg' => [
            'frame' => 'portrait',
            'fit' => 'contain',
            'focus' => 'top',
        ],
        'WhatsApp Image 2026-05-10 at 10.01.36 AM (1).jpeg' => [
            'frame' => 'poster',
            'fit' => 'contain',
            'focus' => 'center',
        ],
        'WhatsApp Image 2026-05-10 at 10.01.37 AM.jpeg' => [
            'frame' => 'poster',
            'fit' => 'contain',
            'focus' => 'center',
        ],
        'WhatsApp Image 2026-05-10 at 10.01.42 AM.jpeg' => [
            'frame' => 'poster',
            'fit' => 'contain',
            'focus' => 'center',
        ],
    ];

    return $variants[$file] ?? [
        'frame' => 'landscape',
        'fit' => 'cover',
        'focus' => 'top',
    ];
}

function collegeImageCardAttributes(string $file): string
{
    $variant = collegeImageVariant($file);

    return sprintf(
        'data-frame="%s" data-fit="%s" data-focus="%s"',
        htmlspecialchars($variant['frame'], ENT_QUOTES),
        htmlspecialchars($variant['fit'], ENT_QUOTES),
        htmlspecialchars($variant['focus'], ENT_QUOTES)
    );
}

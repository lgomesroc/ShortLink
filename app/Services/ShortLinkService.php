<?php

namespace App\Services;

use App\Models\ShortLink;
use Illuminate\Support\Str;

class ShortLinkService
{
    public function createShortLink($originalUrl)
    {
        $shortCode = Str::random(6);

        // Verifica se o código gerado já existe
        while (ShortLink::where('short_code', $shortCode)->exists()) {
            $shortCode = Str::random(6);
        }

        $shortLink = ShortLink::create([
            'original_url' => $originalUrl,
            'short_code' => $shortCode
        ]);

        return $shortLink;
    }

    public function getShortLinkByCode($shortCode)
    {
        return ShortLink::where('short_code', $shortCode)->firstOrFail();
    }
}

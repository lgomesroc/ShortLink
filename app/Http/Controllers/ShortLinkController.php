<?php

namespace App\Http\Controllers;

use App\Services\ShortLinkService;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    private $shortLinkService;

    public function __construct(ShortLinkService $shortLinkService)
    {
        $this->shortLinkService = $shortLinkService;
    }

    public function store(Request $request)
    {
        $shortLink = $this->shortLinkService->createShortLink($request->original_url);
        $shortUrl = 'https://lu.ro/' . $shortLink->short_code;
        return response()->json(['short_link' => $shortUrl], 201);
    }

    public function show($shortCode)
    {
        $shortLink = $this->shortLinkService->getShortLinkByCode($shortCode);
        return response()->json($shortLink);
    }

    public function update(Request $request, $shortCode)
    {
        $shortLink = $this->shortLinkService->getShortLinkByCode($shortCode);
        $shortLink->original_url = $request->original_url;
        $shortLink->save();

        return response()->json($shortLink);
    }

    public function destroy($shortCode)
    {
        $shortLink = $this->shortLinkService->getShortLinkByCode($shortCode);
        $shortLink->delete();

        return response()->json(null, 204);
    }
}

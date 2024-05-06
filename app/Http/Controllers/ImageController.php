<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($siteId, $imageName)
    {
        $path = app_path("storage/{$siteId}/{$imageName}.png");
        if (!file_exists($path)) {
            abort(404);
        }

        $file = file_get_contents($path);
        return response($file, 200)->header("Content-Type", 'image/png');
    }
}

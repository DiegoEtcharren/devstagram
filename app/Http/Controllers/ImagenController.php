<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{

    public function store() {
        dd('Desde ImagenController');
        $path = $request->file('file')->store('uploads', 'public');

        // return JSON so Dropzone is happy
        return response()->json([
            'path' => $path,
            'url'  => Storage::disk('public')->url($path),
        ], 201);
    }
}

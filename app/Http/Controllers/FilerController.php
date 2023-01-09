<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilerController extends Controller
{
    public function __invoke(Request $request)
    {

        // $file = $request->file('avatar');

        // $uploaded  = $file->store('avatars');

        // $name = $file->hashName();

        return asset('avatars/jQuyZltLywuUYKiMKBq1p5qv6O7tHo69Y4hdPLwd.png');

    }
}

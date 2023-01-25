<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use LengthException;
use LogicException;

class FileController extends Controller
{
    public function getUrl()
    {
        return Storage::temporaryUrl('test.png',now()->addSeconds(1));
    }

    public function download(Request $request)
    {
        abort_if(!$request->hasValidSignature(), 404);
        return Storage::download($request->query('path'));
    }
}

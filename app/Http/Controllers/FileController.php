<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use LengthException;
use LogicException;

class FileController extends Controller
{
    public function __invoke()
    {
        // abort_if(true,406,'bad request');
        // throw_if(true, LogicException::class, 'error man');
        // when(),
        // request()->mergeIfMissing(),
    }
}

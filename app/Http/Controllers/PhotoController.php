<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    function exterior () {
        return view('gallery')->with([
            'files' => $this->get_files('/images/exterior')
        ]);

    }

    function interior () {
        return view('gallery')->with([
            'files' => $this->get_files('/images/interior')
        ]);
    }

    function get_files ($dir) {
        return Storage::files($dir);
    
    }
}

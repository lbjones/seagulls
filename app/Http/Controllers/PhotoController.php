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

    function performance () {
        return view('performance');
    }

    function information () {
        return view('information');
    }
    
    function postInformation (Request $r) {
        Storage::put(storage_path() . '/information.csv',
            implode(',', [$r->input('fname'), $r->input('lname'), $r->input('email'), $r->input('phone')])
        );
    }

    function pricing () {
        return view('pricing');
    }

    function get_files ($dir) {
        $files = Storage::files($dir);
        $imagefiles = [];
        foreach ($files as $file) {
            if (in_array(strtolower(pathinfo($file)['extension']),['jpg','png','jpeg']))
            {
                $imagefiles[] = $file;
            }
        }
        sort($imagefiles);
        return $imagefiles;    
    }
}

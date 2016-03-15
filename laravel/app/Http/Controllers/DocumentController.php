<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;

class DocumentController extends Controller
{
    public function getDocuments() {
        $files = Storage::files('pdf/');
        
        $files = array_map(function($path) {
            $name = str_replace('pdf/', '', $path);
            
            // To be included??
            //$sizeMB = round((Storage::size($path) / 1024) / 1024, 2);
            //$lastModTime = date('d.m.Y H:i', Storage::lastModified($path));
       
            return array('name' => $name, 'path' => $path);  
        }, $files);
        
        return view('documents')->with(['files' => $files]);
    }
}

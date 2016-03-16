<?php

namespace App\Http\Controllers;

use Storage;
use Response;

class DocumentController extends Controller
{
    public function showDocuments()
    {
        $files = Storage::files();
        $filenames = array();

        foreach($files as $file) {
            $lastmodified = date("d.m.Y H:i:s", Storage::lastModified($file));
            array_push($filenames, array('filename' => $file, 'lastmodified' => $lastmodified));
        }      

        // sort as a standalone function doesn't understand in which order and on which key he should sort 
        // an associative komplex array -> he doesn't sort by filename automatically
        usort($filenames, function($a, $b) {
            return $a['filename'] > $b['filename'];
        });
        
        return view('documents', array('filenames' => $filenames));
    }

    public function downloadFile($filename)
    {
        $mime = Storage::mimeType($filename);
        $file = Storage::get($filename);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $mime);

        return $response;
    }
}

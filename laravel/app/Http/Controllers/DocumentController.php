<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use Response;
use File;

class DocumentController extends Controller
{
    public function showDocuments()
    {
        $dirPath = storage_path() . '/app/documents';

        $files = File::allFiles($dirPath);
        $filenames = array();

        foreach($files as $file) {
            $filename = explode($dirPath . '/', $file);
            $lastmodified = date("d.m.Y H:i:s", filemtime($file));
            array_push($filenames, array('filename' => $filename[1], 'lastmodified' => $lastmodified));
        }
        

        sort($filenames);
        
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

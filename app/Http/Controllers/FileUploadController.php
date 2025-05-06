<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index()
    {
        $files = File::all();
        return view('file.index', compact('files'));
    }


    function store(Request $request)
    {
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');

        $file = $request->file('file')->store('/', 'public');
        $fileStorage = new File();
        $fileStorage->file_path = $file;
        $fileStorage->save();
        dd("file is saved");
    }

    function download()
    {
        return Storage::disk('local')->download('CMNSwbY3g32WHHTTUjx07zCAusv8vMmKuUhyHsPL.jpg');
    }
}

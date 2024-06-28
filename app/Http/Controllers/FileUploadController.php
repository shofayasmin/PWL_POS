<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas'=>'required|file|image|max:500',
        ]);
        $textFile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-'.time().".".$textFile;
        $path = $request->berkas->storeAs('public',$namaFile);
        echo "proses upload berhasil, data disimpan pada: $path";
    }
}

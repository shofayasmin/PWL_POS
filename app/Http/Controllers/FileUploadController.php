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
        // $path = $request->berkas->store('uploads');
        $path = $request->berkas->storeAs('uploads','berkas');
        echo "proses upload berhasil, data disimpan pada: $path";
        // echo $request->berkas->getClientOriginalName()."lolos validasi";
    }
}

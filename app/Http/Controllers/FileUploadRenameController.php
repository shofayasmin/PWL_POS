<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadRenameController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload-rename');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'nama_gambar' => 'required|string',
            'berkas'=>'required|file|image|max:500',
        ]);

        $extension = $request->berkas->getClientOriginalExtension();
        $namaFile = $request->nama_gambar . '.' . $extension;
        
        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//", $path);

        $publicPath=asset('gambar/'.$namaFile);

        echo "Gambar berhasil di upload ke <a href='$publicPath'>$namaFile</a>";
        echo "<br>";
        echo "<img src='$publicPath' alt='$namaFile' style='max-width: 500px; height: auto;'>";
        
    }
}

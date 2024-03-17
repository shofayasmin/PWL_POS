<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//Praktikum 2.6 – Create, Read, Update, Delete (CRUD)

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::with('level')->get(); //no.2 Prak 2.7
        // dd($user);

        $user = UserModel::with('level')->get(); //no.3 Prak 2.7
        return view('user', ['data' => $user]);

    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) //no.10 Prak 2.6
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id) //no.12 Prak 2.5
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request) //no.16 Prak 2.6
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;
        
        $user->save();
        return redirect('/user');
    }

    public function hapus($id, Request $request) //no.18 Prak 2.6
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
/*
3. Save the program code Step 2. Then run the link in the browser, then 
observe what happens and explain it in the report
=> Muncul pesan 'Illuminate\Database\Eloquent\Collection {#318 ▼ // app\Http\Controllers\UserController.php:16
#items: array:8 [▶]
#escapeWhenCastingToString: false
}' pada broser.
*/

/*
6. Save the program code of Steps 4 and 5. Then run the link in the browser, 
then observe what happens and explain it in the report
=> Muncul Data User dengan tabel ID, Username, Nama, ID LeveL Pengguna, Kode 
Level, Nama Level, dan Aksi yang digunakan untuk mnengedit
ID LeveL Pengguna, Kode Level, Nama Level berasal dari tabel m_level.
*/
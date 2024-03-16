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
        $user = UserModel::all();
        return view('user', ['data' => $user]);        
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) //no.5
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id) //no.12
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request) //no.16
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;
        
        $user->save();
        return redirect('/user');
    }

    public function hapus($id, Request $request) //no.18
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}

/*
4. Save the program code of Steps 1 and 2. Then run the user page on the 
/user route in the browser and give an explanation in the report.
=> Pada browser muncul tabel berisi data user dengan tambahan link 
untuk melakukan CRUD, yaitu Tambah User, Ubah dan Hapus
*/

/*
8. Save the program code Step 5 to 7. Then run it in the browser and click 
on the link "+ Add User" observe what is happening and give an explanation 
in the report.
=> Pada browser muncul pesan error berupa 'Route [/user/tambah_simpan] 
not defined.' karena belum membuat Method tambah_simpan pada UserController dan
Route.
*/

/*
11. Save the program code of Steps 9 and 10. Reopen the user list page in 
the browser, and click the Add User button. Input data on the form and 
click the save button, then observe what happens and give an explanation 
in the report
=> Setelah menekan tombol Simpan, data yang telah diisi pada form muncul 
pada baris palling bawah list Data User sebagai data baru. Dan pada 
phpMyAdmin juga terjadi penambahan data pada tabel m_user.
*/

/*
14. Save the program code of Steps 12 and 13. Then run it in the browser 
and click the "Change" link, observe what is happening and give an 
explanation in the report.
=> Pada browser muncul pesan error berupa 'Route [/user/ubah_simpan] not defined.' 
karena belum membuat Method ubah_simpan pada UserController dan
Route.
*/

/*
17. Save the program code of Steps 15 and 16. Reopen the browser's user 
list page, and click the Change button on one of the lines. Make changes 
to the data on the form and click the Change button, observe what happens 
and give an explanation in the report.
=> Pada browser Data User, terjadi perubahan data pada baris tabel yang 
telah diupdate dengan menekan tombol Ubah lalu tekan menekan tombol Ubah.
*/

/*
19. Save the program code. Reopen the browser's user list page, and click 
the Delete button on one of the lines. Observe what happened and give 
explanations in the report.
=> Pada browser Data User, data pada salah satu baris terhapus setelah 
menekan tombol Hapus.
*/
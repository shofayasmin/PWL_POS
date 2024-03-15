<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//2.
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::firstOrCreate(
//             [
//                 'username' => 'manager',
//                 'nama' => 'Manager',
//             ],
//         );
//         return view('user', ['data' =>$user]);
//     }
// }

//Method 'firstOrCreate()' mencoba mencari user dengan username 'manager', 
// jika tidak ditemukan maka membuat dengan data yang diberikan, yaitu 
// username 'manager' dan nama 'Manager'. kemudian data data tersebut 
// dikirm ke view menggunakan 'return view()'.


//4.
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::firstOrCreate(
//             [
//                 'username' => 'manager22',
//                 'nama' => 'Manager Dua Dua',
//                 'password' => Hash::make('12345'),
//                 'level_id' => 2
//             ],
//         );
//         return view('user', ['data' =>$user]);
//     }
// }

//muncul error karena belum melengkapi 
// protected $fillable = ['level_id', 'username', 'nama']; dengan 
// password didalamnya, sedangkan di phpMyAdmin tetap bisa dieksekusi


//6.
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::firstOrNew(
//             [
//                 'username' => 'manager',
//                 'nama' => 'Manager',
//             ],
//         );
//         return view('user', ['data' =>$user]);
//     }
// }

//Method 'firstOrNew()' mencoba mengambil record pertama yang cocok dengan 
// atribut yang diberikan, jika ditemukan, maka akan dicetak. Jika tidak 
// ditemukan maka akan membuat instance baru, tetapi tidak akan 
// menyimpannya di database.

//8.
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::firstOrNew(
//             [
//                 'username' => 'manager33',
//                 'nama' => 'Manager Tiga Tiga',
//                 'password' => Hash::make('12345'),
//                 'level_id' => 2,
//             ],
//         );
//         return view('user', ['data' =>$user]);
//     }
// }

/*
Pada tampilan browser data yang diisikan akan tetap muncul tetapi pada 
bagian ID tidak muncul karena tidak tersimpan di database, sedangkan pada
phpMyAdmin tidak muncul/tersimpan karena kita menggunakan firstOrNew().
*/

//10.
class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ],
        );
        $user->save();

        return view('user', ['data' =>$user]);
    }
}

//Pada browser muncul karena nomor ID karena atribut yang diisikan 
// tersimpan pada database walaupun menggunakan firstOrNew() karena telah
// menambahkan $user->save();.
// Pada phpMyAdmin muncul baris baru karena atribut tersimpan di database.

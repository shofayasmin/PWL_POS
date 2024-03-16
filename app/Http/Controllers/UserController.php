<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//Lab Course 2.5 – Attribute Changes
//2.
// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::create(
//             [
//                 'username' => 'manager44',
//                 'nama' => 'Manager44',
//                 'password' => Hash::make('12345'),
//                 'level_id' => 2,
//             ],
//         );
//         $user->username = 'manager45'; //mengubah atribut

//         $user->isDirty(); //true
//         $user->isDirty('username'); //true
//         $user->isDirty('nama'); //false
//         $user->isDirty(['nama', 'username']); //true

//         $user->isClean(); //false
//         $user->isClean('username'); //false
//         $user->isClean('nama'); //true
//         $user->isClean(['nama', 'username']); //false

//         $user->save();

//         $user->isDirty(); //false
//         $user->isClean(); //true
//         dd($user->isDirty());
//     }
// }

//Pada browser muncul false // app\Http\Controllers\UserController.php:39 
// yang disebabkan penggunaan kode 'dd($user->isDirty());'. penggunaan kode
// ini mencetak nilai kembalian dari isDirty() menjadi 'false' karena tidak  
// ada perubahan pada model (karena perubahan telah disimpan dan model menjadi
// kembali ke keadaan awal pada $user->save();)


//4.
class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ],
        );
        
        $user->username = 'manager12'; //mengubah atribut

        $user->save();

        $user->wasChanged(); //true
        $user->wasChanged('username'); //true
        $user->wasChanged(['username', 'level_id']); //true
        $user->wasChanged('nama'); //false
        $user->wasChanged(['nama', 'username']); //true
        dd($user->wasChanged(['nama', 'username'])); //true
    }
}

/*
Pada browser mucul true karena diatara atribut username dan nama telah
terjadi perubahan yaitu username, dari 'manager11' menjadi 'manager12'
*/


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\jenis_mobil;
use App\Models\pesan;
use App\Models\user;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class karyawan extends Controller
{
    public function index() : View{
        $jenisMobil = jenis_mobil::all();
        $pesans = pesan::all();
        $users = user::all();
        return view('doorsmeer.karyawan', ['jenisMobil' => $jenisMobil, 'pesans' => $pesans, 'users' => $users]);
    }

    public function tambah(Request $request){
        $user = [
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->username),
            'no_hp' => $request->no_hp
        ];
        DB::table('users')->insert($user);
        // user::create($user);
        // return $user;
        return back();
    }

    public function edit(Request $request){
        $user = [
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ];
        user::where('id', $request->id)->update($user);
        return back();
    }

    public function gantiPassword(Request $request){
        return back();
    }

    public function hapus(Request $request){
        user::where('id', $request->id)->delete();
        return back();
    }
}

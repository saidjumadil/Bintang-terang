<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\jenis_mobil;
use App\Models\pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Beranda extends Controller
{
    public function index() : View {
        $jenisMobil = jenis_mobil::all();
        $pesans = pesan::all();
        // print_r($jenisMobil);
        return view('doorsmeer.dashboard', ['jenisMobil' => $jenisMobil, 'pesans' => $pesans]);
    }

    public function pesan(Request $request){
        $jenis = explode('|', $request->jenis);
        $jenisMobil = jenis_mobil::find($jenis[0]);
        DB::table('pesans')->insert([
            'nama' => $request->nama,
            'plat' => $request->plat,
            'hp' => $request->hp,
            'id_jenis_mobil' => $jenisMobil->id,
            'jenis_mobil' => $jenisMobil->nama,
            'tanggal'=> date("Y-m-d H:i:s"),
            'total' => $jenisMobil->harga,
            'status' => 0
        ]);
        // print_r($request->input());
        return back();
    }

    public function bayar(Request $request){
        $pesan = pesan::find($request->id);
        $pesan->total = $request->bayar;
        $pesan->status = 1;
        $pesan->save();

        return back();
    }

    public function edit(Request $request){
        $jenisMobil = jenis_mobil::find($request->jenis);
        pesan::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'plat' => $request->plat,
                'hp' => $request->hp,
                'id_jenis_mobil' => $jenisMobil->id,
                'jenis_mobil' => $jenisMobil->nama,
                'total' => $jenisMobil->harga
            ]);
        // print_r($request->input());
        return back();
    }

    public function hapus(Request $request){
        pesan::destroy($request->id);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beranda extends Controller
{
    public function index(): View
    {
        return view('doorsmeer.dashboard');
    }

    public function pesan(){

    }

    public function bayar(){

    }

    public function edit(){

    }

    public function hapus(){

    }
}

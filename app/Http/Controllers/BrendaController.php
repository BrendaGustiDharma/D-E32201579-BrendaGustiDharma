<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrendaController extends Controller
{
    public function index(){
        $nama = "Brenda Gusti Dharma";
        $pelajaran = ["Pemrograman Lanjut","Laravel","Controller"];
        return view('home', compact('nama','pelajaran'));
    }

    public function create()
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENAMPILKAN FORM UNTUK MENAMBAH DATA USER";
    }

    public function store(Request $request)
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENCIPTAKAN DATA USER YANG BARU";
    }

    public function show($id)
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENGAMBIL SATU DATA USER DENGAN id=". $id;
    }

    public function edit($id)
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENAMPILKAN FORM MENGUBAH DATA EDIT DENGAN id=". $id;
    }

    public function update(Request $request, $id)
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENGUBAH DATA USER DENGAN id=". $id;
    }

    public function destroy($id)
    {
        return "METHOD INI NANTINYA AKAN DIGUNAKAN UNTUK MENGHAPUS DATA USER DENGAN id=". $id;
    }
}



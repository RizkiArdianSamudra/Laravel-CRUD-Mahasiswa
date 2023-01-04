<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = tbl_mahasiswa::all();
        return view('index', compact(['mahasiswa']));
    }
    public function create()
    {
        return view('create');
    }
    public function action(Request $request) // panggil request diikuti variabel untuk mengambil data form
    {
        tbl_mahasiswa::create($request->except(['_token', 'submit']));
        return redirect('/');
    }
    public function edit($nrp)
    {
        $mahasiswa = tbl_mahasiswa::find($nrp); // untuk mengambil data mahasiswa yang sesuai dengan id yang dikirim
        return view('edit', compact(['mahasiswa']));
    }
    public function update($nrp, Request $request) // tangkap paramater id, dan tangkap requestnya untuk mendapatkan data yang diinputkan user
    {
        $mahasiswa = tbl_mahasiswa::find($nrp); // untuk mengambil data sesuai dengan id yang ingin diedit
        $mahasiswa->update($request->except(['_token', 'submit'])); // untuk mengupdate data
        return redirect('/');
    }
    public function delete($nrp)
    {
        $mahasiswa = tbl_mahasiswa::find($nrp);
        $mahasiswa->delete();
        return redirect('/');
    }
    public function about()
    {
        return view('about');
    }
}

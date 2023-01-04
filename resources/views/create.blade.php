@extends('layouts.master')

@section('title', 'Tambah Data')

@section('content')
    <div class="px-20 py-10 min-h-screen">
        <h1 class="text-2xl text-sky-800 font-bold mb-8">Input Data Mahasiswa</h1>
        <div>
            <form action="/action" method="POST">
                @csrf 
                <div class="grid grid-cols-2 gap-10 gap-x-60">
                    <div>
                        <p class="font-bold capitalize mb-2">nama mahasiswa</p>
                        <input type="text" name="nama" class="border-2 border-sky-800/25 w-full h-10 rounded-lg pl-2" required>
                    </div>
                    <div>
                        <p class="font-bold capitalize mb-2">alamat email</p>
                        <input type="email" name="email" class="border-2 border-sky-800/25 w-full h-10 rounded-lg pl-2" required>
                    </div>
                    <div>
                        <p class="font-bold capitalize mb-2">NIM</p>
                        <input type="text" name="nrp" class="border-2 border-sky-800/25 w-full h-10 rounded-lg pl-2" required>
                    </div>
                    <div>
                        <p class="font-bold capitalize mb-2">alamat rumah</p>
                        <input type="text" name="alamat" class="border-2 border-sky-800/25 w-full h-10 rounded-lg pl-2" required>
                    </div>
                </div>
                <div class="mt-20 flex justify-end">
                    <button class="px-5 py-2 bg-sky-800 rounded-lg text-white" type="submit" name="submit" value="submit">Submit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

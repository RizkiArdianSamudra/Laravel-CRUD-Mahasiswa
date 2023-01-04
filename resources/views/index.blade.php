@extends('layouts.master')

@section('title', 'Data Mahasiswa')

@section('content')
    <div class="px-20 py-10 min-h-screen">
        <h1 class="text-2xl text-sky-800 font-bold mb-8">Data Mahasiswa</h1>
        <div class="grid grid-cols-2 gap-10 gap-x-60 w-full">
            @foreach($mahasiswa as $mhs)
            <div class="p-5 flex justify-between border-2 border-gray-200 rounded-2xl shadow leading-8">
                <div>
                    <p class="font-bold text-lg capitalize">{{ $mhs->nama }}</p>
                    <p>{{ $mhs->nrp }}</p>
                    <p class="capitalize">{{ $mhs->alamat }}</p>
                </div>
                <div>
                    <div class="flex justify-end space-x-4">
                        <form action="/{{ $mhs->nrp }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');">
                                <svg class="w-8 h-8 bg-white-800 shadow rounded-full p-1 text-red-800 border-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg>
                            </button>
                        </form>
                        <a href="/{{ $mhs->nrp }}/edit">
                            <svg class="w-8 h-8 bg-sky-800 shadow rounded-full p-1 text-white border-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/></svg>
                        </a>
                    </div>
                    <p class="text-right">{{ $mhs->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

{{-- navigation --}}
<div class="sticky top-0 bg-sky-800">
    <div class="border-b border-white/10 py-4">
        <div class="container">
        <nav class="flex items-center justify-between mx-20">
            <div class="flex items-center gap-x-2">
                <button class="text-white font-bold">Simple Siakad</button>
            </div>
            <div class="flex items-center gap-x-2">
                <a href="/" class="navLink{{ Request::is('/') ? ' aktif' : '' }} px-4 py-1 text-white hover:underline rounded-full ml-10">Data Mahasiswa</a>
                <a href="/create" class="navLink{{ Request::is('create') ? ' aktif' : '' }} px-4 py-1 text-white hover:underline rounded-full ml-10">Input Data</a>
                <a href="/about" class="navLink{{ Request::is('about') ? ' aktif' : '' }} px-4 py-1 text-white hover:underline rounded-full ml-10">About Me</a>
            </div>
        </nav>
        </div>
    </div>
</div>
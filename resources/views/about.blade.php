@extends('layouts.master')

@section('title', 'Tentang Saya')

@section('content')
    <div class="px-20 py-10 min-h-screen">
        <h1 class="text-2xl text-sky-800 font-bold">About Me</h1>
        <div class="w-fit m-auto mt-8">
            <img src="{{ url('images/fotopribadi.jpeg') }}" class="w-60 m-auto">
            <h1 class="text-2xl text-sky-800 font-bold mt-4 text-center">Rizki Ardian Samudra</h1>
        </div>
        <div>
            <div class="mt-8">
                <h1 class="text-2xl text-sky-800 font-bold">Background</h1>
                <p class="mt-4 text-justify">Perkenalkan nama saya Rizki Ardian Samudra atau biasa dipanggil Rizki, dan saya lahir di kota kebanggaan saya yaitu Tuban. Saya sangat menyukai hal-hal baru yang belum pernah saya temui sebelumnya, terlebih dalam bidang informatika. Dan saya juga memiliki motivasi tinggi untuk belajar lebih dalam di dunia IT. Pendidikan saya sekarang adalah kuliah di Prodi Teknik Informatika, Universitas Trunojoyo Madura.</p>
            </div>
            <div class="mt-8">
                <h1 class="text-2xl text-sky-800 font-bold"> Suka Duka Praktikum PAW</h1>
                <p class="mt-4 text-justify">Kesan saya terhadap praktikum PAW ini menyenangkan karena saya dapat belajar banyak hal mengenai dunia perkodingan untuk aplikasi web. Menurut saya pribadi praktikum ini sangat berguna bagi mahasiswa sebab dengan adanya praktikum kita bisa bertanya langsung kepada asisten praktikum jika mengalami kesulitan. Dengan adanya praktikum kami juga menjadi lebih paham materi yang telah disampaikan sewaktu kuliah dikelas. Sedangkan duka dari praktikum adalah jika pemateri terlalu cepat menyampaikan materi sehingga kadang kami mahasiswa kebingungan hehe. Terima kasih kepada seluruh asprak yang telah membagi ilmunya kepada kami :)</p>
            </div>
        </div>
    </div>
@endsection

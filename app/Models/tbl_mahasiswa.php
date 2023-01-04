<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tbl_mahasiswa'; //mengasih tau laravel bahwa nama tabelnya adalah tbl_mahasiswa
    protected $guarded = [];
    public $timestamps = false; //secara default laravel akan mengharapkan kolom created_at & updated_at di tabel. Dengan membuatnya salah, itu akan mengesampingkan pengaturan default.
    protected $primaryKey = 'nrp'; //jika menggunakan find(), secara otomatis menganggap kolom kunci utama akan menjadi id. Agar ini berfungsi dengan benar, kita harus menyetel kunci utama di model menjadi 'nrp' di dalam kelas.
}

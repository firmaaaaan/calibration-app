<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalibrasi extends Model
{
    protected $fillable = [
        'nama_pemohon',
        'instansi',
        'email',
        'telepon',
        'nama_alat',
        'merk',
        'serial_number',
        'keterangan',
        'user_id',   // tambahkan user_id agar bisa mass assignment
        'status',    // tambahkan status jika sudah ada di tabel
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

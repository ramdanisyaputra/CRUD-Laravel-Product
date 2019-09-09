<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nisn', 'nama_depan','nama_belakang','jk','alamat','provinsi','kabupaten','asal_sekolah','nilai_rata',
    ];
}

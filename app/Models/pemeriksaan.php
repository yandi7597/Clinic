<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pasien','clinic','nama_dokter','tgl','hasil_pengujian','biaya','pajak','total_biaya'];
    protected $table ='pemeriksaan';
}

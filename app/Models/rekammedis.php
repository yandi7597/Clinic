<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pasien','keluhan','tgl','nama_dokter'];
    protected $table ='rekammedis';
}

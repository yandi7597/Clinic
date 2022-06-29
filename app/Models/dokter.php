<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $fillable = ['nama_dokter','jk','alamat','tgl_lahir','spesialis','no_hp','email','username','password','clinic','foto'];
    protected $table ='dokter';
}

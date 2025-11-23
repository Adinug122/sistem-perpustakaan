<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman_tables';

    protected $primaryKey = 'id';
    protected $fillable = ['id','judul','isi','gambar'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiGereja extends Model
{
    use HasFactory;

    protected $fillable = ['Judul', 'TanggalUpload', 'Isi'];
}

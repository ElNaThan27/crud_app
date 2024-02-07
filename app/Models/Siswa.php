<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nis',
        'nama',
        'kelamin',
        'program_keahlian'
    ];

    protected $table = 'data_siswa';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;

    protected $table = 'nama_tabel_peran'; // Ganti 'nama_tabel_peran' dengan nama tabel yang sesuai.

    protected $fillable = [
        'nama',
        'film',
        'cast',
        'action',
        'genre_id', // Sesuaikan dengan kolom yang sesuai di tabel 'nama_tabel_peran'.
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}

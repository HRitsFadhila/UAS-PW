<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'registrasi'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'username',
        'email',
        'handphone',
        'tanggal_lahir',
        'password',
        'jenis_kelamin',
        'religion_id',
        'biografi',
    ];

    public function religion()
    {
        return $this->belongsTo(Religion::class, 'religion_id');
    }
}

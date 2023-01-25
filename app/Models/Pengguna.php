<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Latfur\Event\Models\Event;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = [
        'Namapengguna',
        'Nomortelepon',
        'nisn',
        'jeniskelamin',
        'alamat'
    ];

    protected $table = 'user';
    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_transaksi', 'id');
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id');
    }

}

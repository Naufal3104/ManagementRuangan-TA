<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'NomorTelepon',
        'id_ruangan',
        'Status',
        'token'
    ];

    protected $table = 'transaksi';
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id');
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'id_guest', 'id');
    }
}

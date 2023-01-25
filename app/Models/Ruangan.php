<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Ruangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'Namaruangan',
        'Waktupenggunaan',
        'WaktuHingga'
    ];

    
    protected $table = 'ruangan';
    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_transaksi', 'id');
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id');
    }
}

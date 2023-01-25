<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    protected $table = 'jadwal';
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id');
    }
    public function user(){
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'id_guest', 'id');
    }
}

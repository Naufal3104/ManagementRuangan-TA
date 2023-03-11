<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'id_ruangan',
        'id_user',
        'id_transaksi',
        'start',
        'end',
        'nisn',
        'nip',
        'status'
    ];

    protected $table = 'event';
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id');
    }
    public function user(){
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }
}

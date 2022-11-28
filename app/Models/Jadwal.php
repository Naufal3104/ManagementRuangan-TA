<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ruangan',
        'id_user',
        'Waktupenggunaan',
        'Waktuhingga',
        'Acara'
    ];

    protected $table = 'jadwal';
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id');
    }
    public function user(){
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
}

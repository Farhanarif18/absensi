<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $table = 'cuti';

    protected $fillable = [
        'id_user',
        'alasan',
        'tanggal',        
    ];
    public function cuti(){
        
        return $this->belongsTo(User::class, 'id_user');
    
    }
}

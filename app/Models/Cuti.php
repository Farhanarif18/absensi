<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    use HasFactory;
    protected $table = 'cutis';

    protected $fillable = [
        'id_user',
        'alasan',
        'jumlah',        
    ];
}

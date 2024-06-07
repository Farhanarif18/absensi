<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadir extends Model
{
    use HasFactory;

    protected $table = 'hadir';

    protected $fillable = [
        'jam_datang',
        'jam_pulang',
        'insentive',
        'id_user',
    ];

    public function user(){
        return $this->hasMany(User::class,'id','id_user');
    
    }


}

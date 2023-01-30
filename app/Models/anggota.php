<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $guarded = [];

    

    public function eskul(){
        return $this->belongsTo(eskul::class  ,'id_eskul', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class role extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class  , 'id_eskul', 'id');
    }
}

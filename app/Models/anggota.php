<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory,HasSlug;

    protected $guarded = [];

    public function slugConfigs(): array
    {
        return [
            'slug_anggota' => 'nis'
        ];
    }

    public function eskul(){
        return $this->belongsTo(eskul::class  ,'id_eskul', 'id');
    }
}

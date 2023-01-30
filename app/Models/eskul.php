<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function slugConfigs(): array
    {
        return [
            'slug' => 'nama_eskul'
        ];
    }

    public function dokumentasi(){
        return $this->hasMany(dokumentasi::class, 'penyelenggara');
    }
    
    public function anggota(){
        return $this->hasMany(anggota::class, 'id_eskul');
    }
    public function pendaftaran(){
        return $this->hasMany(pendaftaran::class, 'id_eskul');
    }
}

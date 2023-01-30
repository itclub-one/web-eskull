<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class dokumentasi extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function slugConfigs(): array
    {
        return [
            'slug_dokumentasi' => 'nama_kegiatan'
        ];
    }

    public function eskul(){
        return $this->belongsTo(eskul::class  ,'penyelenggara', 'id');
    }
}

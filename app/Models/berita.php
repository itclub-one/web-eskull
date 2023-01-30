<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function slugConfigs(): array
    {
        return [
            'slug_berita' => 'judul_berita'
        ];
    }
}

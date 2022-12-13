<?php

namespace App\Models;

use Database\Factories\EskulFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'slug';
    public $incrementing = false;
    public static function factory(): EskulFactory
    {
        return EskulFactory::new();
    }
}

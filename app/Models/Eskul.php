<?php

namespace App\Models;

use Database\Factories\EskulFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{

    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'slug';
    public $incrementing = false;
}

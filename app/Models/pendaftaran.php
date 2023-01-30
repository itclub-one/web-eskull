<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class pendaftaran extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function rules()
    {
        return [
            'nis' => [
                'required',
                Rule::unique('pendaftaran', 'nis')->ignore($this->pendaftaran)
            ]
        ]; 
    }
    public function eskul(){
        return $this->belongsTo(eskul::class  ,'id_eskul', 'id');
    }
    
}

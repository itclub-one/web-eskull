<?php

namespace App\Exports;

use App\Models\pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;

class daftarCalonAnggota implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pendaftaran::all();
    }
}

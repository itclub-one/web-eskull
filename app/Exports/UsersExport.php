<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $filteredUser = User::where('role_id', '=', 2)
            ->orderBy('id_eskul')
            ->get();
        return$filteredUser ;
    }

    public function map($user): array
    {
        return [
            // Data yang diambil dari kolom tabel database
            $user->email ?? 'N/A',
            $user->name ?? 'N/A',
            'Cimanuk309A',
            $user->eskul->nama_eskul ?? 'N/A',
        ];
    }

    public function headings(): array
    {
        if (auth()->user()->role_id == 1) {
            return [
                'E Mail',
                'Nama',
                'Password',
                'Ekstrakurikuler',
            ];
        }
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true],
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ],
            'A1:D1' => [
                'font' => ['bold' => true],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ],
            'A2:G' . $sheet->getHighestRow() => [
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ],
        ];
    }
}

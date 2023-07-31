<?php

namespace App\Exports;

use App\Models\anggota;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AnggotaExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        if (auth()->user()->role_id == 1) {
            $filteredAnggota = anggota::all()->sortBy([
                ['id_eskul', 'asc'],
                ['kelas_anggota', 'asc'],
            ]);

            return $filteredAnggota;
        } else {
            $filteredAnggota = anggota::where('id_eskul', '=', auth()->user()->id_eskul)
                ->orderBy('kelas_anggota')
                ->get();

            return$filteredAnggota ;
        }
    }

    public function map($anggota): array
    {
        if (auth()->user()->role_id == 1) {
            return [
                // Data yang diambil dari kolom tabel database
                $anggota->nis ?? 'N/A',
                $anggota->nama_anggota ?? 'N/A',
                [$anggota->kelas_anggota ?? 'N/A',
                $anggota->jurusan ?? 'N/A'],
                $anggota->email ?? 'N/A',
                $anggota->no_wa ?? 'N/A',
                $anggota->eskul->nama_eskul ?? 'N/A',
            ];
        }
        return [
            // Data yang diambil dari kolom tabel database
            $anggota->nis ?? 'N/A',
            $anggota->nama_anggota ?? 'N/A',
            [$anggota->kelas_anggota ?? 'N/A',
            $anggota->jurusan ?? 'N/A'],
            $anggota->email ?? 'N/A',
            $anggota->no_wa ?? 'N/A',
        ];
    }

    public function headings(): array
    {
        if (auth()->user()->role_id == 1) {
            return [
                'NIS',
                'Nama',
                'Kelas',
                'E-Mail',
                'No WhatsApp',
                'Ekstrakurikuler',
            ];
        }
        return [
            'NIS',
            'Nama',
            'Kelas',
            'E-Mail',
            'No WhatsApp',
        ];
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
            'A1:G1' => [
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

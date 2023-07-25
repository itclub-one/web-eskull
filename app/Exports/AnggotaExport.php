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
        if (auth()->user()->role == 0) {
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
        if (auth()->user()->role == 0) {
            return [
                // Data yang diambil dari kolom tabel database
                $anggota->nis,
                $anggota->nama_anggota,
                [$anggota->kelas_anggota,
                $anggota->jurusan],
                $anggota->email,
                $anggota->no_wa,
                $anggota->eskul->nama_eskul,
            ];
        }
        return [
            // Data yang diambil dari kolom tabel database
            $anggota->nis,
            $anggota->nama_anggota,
            [$anggota->kelas_anggota,
            $anggota->jurusan],
            $anggota->email,
            $anggota->no_wa,
        ];
    }

    public function headings(): array
    {
        if (auth()->user()->role == 0) {
            return [
                'NIS',
                'NAMA',
                'KELAS',
                'E-Mail',
                'NO WHATSAPP',
                'Ekstrakurikuler',
            ];
        }
        return [
            'NIS',
            'NAMA',
            'KELAS',
            'E-Mail',
            'NO WHATSAPP',
            'KEHADIRAN',
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

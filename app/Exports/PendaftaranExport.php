<?php

namespace App\Exports;

use App\Models\pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PendaftaranExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        if (auth()->user()->role == 'root') {
            $filteredPendaftaran = pendaftaran::all()->sortBy([
                ['id_eskul', 'asc'],
                ['kelas_calon_anggota', 'asc'],
                ['nama_calon_anggota', 'asc'],
            ]);

            return $filteredPendaftaran;
        } else {
            $filteredPendaftaran = pendaftaran::where('id_eskul', '=', auth()->user()->id)
                ->orderBy('kelas_calon_anggota')
                ->orderBy('nama_calon_anggota')
                ->get();

            return $filteredPendaftaran;
        }
    }

    public function map($pendaftaran): array
    {
        if (auth()->user()->role == 'root') {
            return [
                // Data yang diambil dari kolom tabel database
                $pendaftaran->nis,
                $pendaftaran->nama_calon_anggota,
                [$pendaftaran->kelas_calon_anggota,
                $pendaftaran->jurusan],
                $pendaftaran->email,
                $pendaftaran->no_wa,
                $pendaftaran->alasan,
                $pendaftaran->eskul->nama_eskul,
            ];
        }
        return [
            // Data yang diambil dari kolom tabel database
            $pendaftaran->nis,
            $pendaftaran->nama_calon_anggota,
            [$pendaftaran->kelas_calon_anggota,
            $pendaftaran->jurusan],
            $pendaftaran->email,
            $pendaftaran->no_wa,
            $pendaftaran->alasan,
        ];
    }

    public function headings(): array
    {
        if (auth()->user()->role == 'root') {
            return [
            'NIS',
            'NAMA',
            'KELAS',
            'EMAIL',
            'NO WHATSAPP',
            'ALASAN',
            'EKSTRAKURIKULER',
        ];
        }
            return [
            'NIS',
            'NAMA',
            'KELAS',
            'EMAIL',
            'NO WHATSAPP',
            'ALASAN',
            'KEHADIRAN',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true],
                'borders' => [
                    'allBorders' => [
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

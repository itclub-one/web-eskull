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
        if (auth()->user()->role_id == 1) {
            $filteredPendaftaran = pendaftaran::all()->sortBy([
                ['id_eskul', 'asc'],
                ['kelas_calon_anggota', 'asc'],
                ['nama_calon_anggota', 'asc'],
            ]);

            return $filteredPendaftaran;
        } else {
            $filteredPendaftaran = pendaftaran::where('id_eskul', '=', auth()->user()->id_eskul)
                ->orderBy('kelas_calon_anggota')
                ->orderBy('nama_calon_anggota')
                ->get();

            return $filteredPendaftaran;
        }
    }

    public function map($pendaftaran): array
{
    if (auth()->user()->role_id == 1) {
        return [
            // Data yang diambil dari kolom tabel database
            $pendaftaran->nis ?? 'N/A',
            $pendaftaran->nama_calon_anggota ?? 'N/A',
            [$pendaftaran->kelas_calon_anggota ?? 'N/A',
            $pendaftaran->jurusan ?? 'N/A'],
            $pendaftaran->email ?? 'N/A',
            $pendaftaran->no_wa ?? 'N/A',
            $pendaftaran->eskul->nama_eskul ?? 'N/A', // This line might cause the error
            $pendaftaran->alasan ?? 'N/A',
        ];
    }

    // For non-admin users, handle the null case for $pendaftaran->eskul
    $nama_eskul = $pendaftaran->eskul ? $pendaftaran->eskul->nama_eskul : 'N/A';

    return [
        // Data yang diambil dari kolom tabel database
        $pendaftaran->nis ?? 'N/A',
        $pendaftaran->nama_calon_anggota ?? 'N/A',
        [$pendaftaran->kelas_calon_anggota ?? 'N/A',
        $pendaftaran->jurusan ?? 'N/A'],
        $pendaftaran->email ?? 'N/A',
        $pendaftaran->no_wa ?? 'N/A',
        $nama_eskul, // Use the variable that holds the value or 'N/A'
        $pendaftaran->alasan ?? 'N/A',
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
            'Alasan',
        ];
        }
            return [
            'NIS',
            'Nama',
            'Kelas',
            'E-Mail',
            'No WhatsApp',
            'Ekstrakurikuler',
            'Alasan',
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

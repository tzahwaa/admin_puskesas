<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Balita;

class BalitaExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return Balita::query();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Anak',
            'Nama Ibu',
            'Alamat',
            'Jenis Kelamin',
            'Umur',
            'Berat Badan',
            'Panjang Badan',
            'Detak Jantung',
            'Sistolik',
            'Diastolik',
            'Z-Score Berat Badan',
            'Z-Score Panjang Badan',
            'Klasifikasi Berat Badan',
            'Klasifikasi Panjang Badan',
            'Klasifikasi Detak Jantung',
        ];
    }
}
<?php

namespace App\Exports;

use App\Models\Person;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportDataPerson implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // mengambil data dan mengurutkan dari pembelian terbaru
        return Person:: orderBy('created_at', 'DESC')->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Kelompok',
            'Gender',
            'Tanggal Lahir',
        ];
    }

    public function map($person): array
    {
        return [
            $person->id,
            $person->name,
            $person->type,
            $person->gender,
            $person->birth_date,
        ];
    }
}

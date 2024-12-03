<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportDataItem implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Item::orderBy('created_at', 'DESC')->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Barang',
            'Tipe'
        ];
    }
    public function map($item): array
    {
        return [
            $item->id,
            $item->name,
            $item->type,
        ];
    }
}

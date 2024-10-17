<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::create([
            'name' => 'Seragam',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Kacamata',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Vaksin',
            'type' => 'vaksin',
        ]);

        Item::create([
            'name' => 'Masker',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Tas',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Buku',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Sepatu',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Obat',
            'type' => 'obat',
        ]);

        Item::create([
            'name' => 'Vitamin',
            'type' => 'obat',
        ]);

        Item::create([
            'name' => 'Suplemen',
            'type' => 'obat',
        ]);

        Item::create([
            'name' => 'Tissue',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Sarung Tangan',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Stetoskop',
            'type' => 'alat',
        ]);
    }
}

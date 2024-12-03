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
            'name' => 'Timbangan Badan Digital',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Timbangan Bayi',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Stetoskop',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Tensi Meter Digital',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Tensi Meter Manual',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Pengukur Tinggi Badan',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Thermometer Digital',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Thermometer Raksa',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Infus Stand',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Alat Suntik Steril',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Tikar Pemeriksaan',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Box P3K',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Gunting Perban',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Sarung Tangan Medis',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Masker Medis',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Hand Sanitizer',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Pen Pencatat',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Buku Kesehatan',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Kursi Lipat',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Meja Lipat',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Seragam Posyandu',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Alat USG Portabel',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Panjang Ukur Bayi',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Alat Cek Gula Darah',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Alat Cek Kolesterol',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Cool Box Vaksin',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Obat-obatan Dasar',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Alat Penyuluhan',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Speaker Portable',
            'type' => 'alat',
        ]);

        Item::create([
            'name' => 'Poster Edukasi Kesehatan',
            'type' => 'alat',
        ]);
    }
}

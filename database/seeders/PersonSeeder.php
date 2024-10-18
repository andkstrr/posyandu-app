<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Person::create([
            'name' => 'Ahmad',
            'type' => 'bayi',
            'gender' => 'laki-laki',
            'birth_date' => '2024-01-01',
        ]);

        Person::create([
            'name' => 'Rahmat',
            'type' => 'bayi',
            'gender' => 'laki-laki',
            'birth_date' => '2024-01-01',
        ]);

        Person::create([
            'name' => 'Siti',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '2001-01-01',
        ]);

        Person::create([
            'name' => 'Tiara',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '2001-01-01',
        ]);

        Person::create([
            'name' => 'Umi',
            'type' => 'lansia',
            'gender' => 'perempuan',
            'birth_date' => '1960-01-01',
        ]);

        Person::create([
            'name' => 'Vina',
            'type' => 'lansia',
            'gender' => 'perempuan',
            'birth_date' => '1960-01-01',
        ]);

        Person::create([
            'name' => 'Sukardi',
            'type' => 'lansia',
            'gender' => 'laki-laki',
            'birth_date' => '1960-01-01',
        ]);

        Person::create([
            'name' => 'Budi',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Caca',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Dedi',
            'type' => 'lansia',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Eka',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Feri',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Gita',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Hana',
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Icha',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Joko',
            'type' => 'lansia',
            'gender' => 'laki-laki',
            'birth_date' => '1960-01-01',
        ]);

        Person::create([
            'name' => 'Kiki',
            'type' => 'remaja',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Lala',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Mama',
            'type' => 'batita',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Nani',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Ojo',
            'type' => 'batita',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Pipi',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Riri',
            'type' => 'bayi',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Susi',
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Titi',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);
    }
}

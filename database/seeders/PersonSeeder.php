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
            'name' => 'Aisyah',
            'type' => 'bayi',
            'gender' => 'perempuan',
            'birth_date' => '2024-02-02',
        ]);

        Person::create([
            'name' => 'Daffa',
            'type' => 'balita',
            'gender' => 'laki-laki',
            'birth_date' => '2020-06-15',
        ]);

        Person::create([
            'name' => 'Nadya',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '2020-08-10',
        ]);

        Person::create([
            'name' => 'Zaki',
            'type' => 'batita',
            'gender' => 'laki-laki',
            'birth_date' => '2021-09-25',
        ]);

        Person::create([
            'name' => 'Farah',
            'type' => 'batita',
            'gender' => 'perempuan',
            'birth_date' => '2021-11-30',
        ]);

        Person::create([
            'name' => 'Fahri',
            'type' => 'anak-anak',
            'gender' => 'laki-laki',
            'birth_date' => '2016-12-14',
        ]);

        Person::create([
            'name' => 'Alma',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '2015-05-09',
        ]);

        Person::create([
            'name' => 'Lukman',
            'type' => 'anak-anak',
            'gender' => 'laki-laki',
            'birth_date' => '2014-07-21',
        ]);

        Person::create([
            'name' => 'Kirana',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1996-04-18',
        ]);

        Person::create([
            'name' => 'Fadila',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1997-11-03',
        ]);

        Person::create([
            'name' => 'Mia',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1995-03-15',
        ]);

        Person::create([
            'name' => 'Arjuna',
            'type' => 'bayi',
            'gender' => 'laki-laki',
            'birth_date' => '2024-03-07',
        ]);

        Person::create([
            'name' => 'Kaila',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '2020-01-11',
        ]);

        Person::create([
            'name' => 'Raka',
            'type' => 'batita',
            'gender' => 'laki-laki',
            'birth_date' => '2022-06-02',
        ]);

        Person::create([
            'name' => 'Shafa',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '2015-10-29',
        ]);

        Person::create([
            'name' => 'Yusuf',
            'type' => 'balita',
            'gender' => 'laki-laki',
            'birth_date' => '2020-09-17',
        ]);

        Person::create([
            'name' => 'Naila',
            'type' => 'batita',
            'gender' => 'perempuan',
            'birth_date' => '2022-04-20',
        ]);

        Person::create([
            'name' => 'Bima',
            'type' => 'anak-anak',
            'gender' => 'laki-laki',
            'birth_date' => '2016-02-08',
        ]);

        Person::create([
            'name' => 'Anya',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1994-08-19',
        ]);

        Person::create([
            'name' => 'Hafiz',
            'type' => 'bayi',
            'gender' => 'laki-laki',
            'birth_date' => '2024-04-22',
        ]);

        Person::create([
            'name' => 'Alina',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '2020-11-12',
        ]);

        Person::create([
            'name' => 'Rizky',
            'type' => 'batita',
            'gender' => 'laki-laki',
            'birth_date' => '2021-03-25',
        ]);

        Person::create([
            'name' => 'Salsa',
            'type' => 'anak-anak',
            'gender' => 'perempuan',
            'birth_date' => '2015-07-16',
        ]);

        Person::create([
            'name' => 'Azka',
            'type' => 'bayi',
            'gender' => 'laki-laki',
            'birth_date' => '2024-05-05',
        ]);

        Person::create([
            'name' => 'Inara',
            'type' => 'balita',
            'gender' => 'perempuan',
            'birth_date' => '2020-03-10',
        ]);

        Person::create([
            'name' => 'Alvino',
            'type' => 'batita',
            'gender' => 'laki-laki',
            'birth_date' => '2022-08-14',
        ]);

        Person::create([
            'name' => 'Dina',
            'type' => 'ibu hamil',
            'gender' => 'perempuan',
            'birth_date' => '1992-12-05',
        ]);

        Person::create([
            'name' => 'Zahra',
            'type' => 'bayi',
            'gender' => 'perempuan',
            'birth_date' => '2024-06-30',
        ]);
    }
}

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
            'name' => 'Budi',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Caca',
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Dedi',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Eka',
            'type' => 'dewasa',
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
            'type' => 'dewasa',
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
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Kiki',
            'type' => 'dewasa',
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
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Nani',
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Ojo',
            'type' => 'dewasa',
            'gender' => 'laki-laki',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Pipi',
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);

        Person::create([
            'name' => 'Riri',
            'type' => 'dewasa',
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
            'type' => 'dewasa',
            'gender' => 'perempuan',
            'birth_date' => '1990-01-01',
        ]);
    }
}

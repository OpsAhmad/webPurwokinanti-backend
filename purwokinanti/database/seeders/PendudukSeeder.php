<?php

namespace Database\Seeders;

use App\Models\Kependudukan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
                'name' => "Pak jarwo",
                'born' => Crypt::encryptString('1986-07-18'),
                'gender' => "Laki-Laki",
                'nik' => Crypt::encryptString('3434343930430003'),
                'status' => 'Suami',
                'job' => 'PNS/ASN',
                'education' => 'S2',
                'keluarga_id' => 1,
                'address' => 'address1',
            ],
            [
                'name' => "Siska",
                'born' => Crypt::encryptString('1996-07-18'),
                'gender' => "Perempuan",
                'nik' => Crypt::encryptString('3434343930430003'),
                'status' => 'Istri',
                'job' => 'PNS/ASN',
                'education' => 'S2',
                'keluarga_id' => 1,
                'address' => 'address1',
            ],
            [
                'name' => "Rifqi",
                'born' => Crypt::encryptString('2014-07-18'),
                'nik' => Crypt::encryptString('3434343930430003'),
                'gender' => "Laki-Laki",
                'status' => 'Anak',
                'job' => 'Pelajar',
                'education' => 'SD',
                'keluarga_id' => 1,
                'address' => 'address1',
            ],
            [
                'name' => "Pak Irwan",
                'born' => Crypt::encryptString('1976-07-18'),
                'nik' => Crypt::encryptString('3434343930430003'),
                'gender' => "Laki-Laki",
                'status' => 'Suami',
                'job' => 'Karyawan swasta',
                'education' => 'SMA',
                'keluarga_id' => 2,
                'address' => 'address2',

            ],
            [
                'name' => "Lina",
                'born' => Crypt::encryptString('1976-07-18'),
                'nik' => Crypt::encryptString('3434343930430003'),
                'gender' => "Perempuan",
                'status' => 'Istri',
                'job' => 'Buruh',
                'education' => 'SMA',
                'keluarga_id' => 2,
                'address' => 'address2',
            ],
            [
                'name' => "Angel",
                'born' => Crypt::encryptString('2006-07-18'),
                'nik' => Crypt::encryptString('3434343930430003'),
                'gender' => "Perempuan",
                'status' => 'Anak',
                'job' => 'Pelajar',
                'education' => 'SMP',
                'keluarga_id' => 2,
                'address' => 'address2',
            ],
        ]);
        // Lets insert to database
        $data->each(function ($data) {
            Kependudukan::create($data);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create(
            [
                'image' => 'me.jpg',
                'nama' => 'John Doe',
                'alamat' => 'Jl. Jalan',
                'no_telp' => '08123456789',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'eselon' => 'II',
                'npwp' => '1234567890',
                'id_position' => 1,
                'id_position_class' => 1,
                'id_work_unit' => 1,
            ],
        );
    }
}

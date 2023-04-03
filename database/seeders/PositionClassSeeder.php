<?php

namespace Database\Seeders;

use App\Models\PositionClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PositionClass::create(
            [
                'kode_golongan' => 'A01',
            ]
        );
    }
}

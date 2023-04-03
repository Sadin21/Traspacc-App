<?php

namespace Database\Seeders;

use App\Models\WorkUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkUnit::create(
            [
                'unit_kerja' => 'PT. ABC',
                'alamat' => 'Samarinda',
            ]
        );
    }
}

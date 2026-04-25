<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'Teknik Informatika']);
        Department::create(['name' => 'Sistem Informasi']);
        Department::create(['name' => 'Teknologi Informasi']);
        Department::create(['name' => 'Bisnis Digital']);
        Department::create(['name' => 'Pendidikan Teknologi Informasi']);
        Department::create(['name' => 'Magister Komputer']);
    }
}
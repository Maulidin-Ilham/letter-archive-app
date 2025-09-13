<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Surat Keputusan',
                'detail' => 'Surat yang berisi keputusan resmi dari lembaga atau organisasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surat Pemberitahuan',
                'detail' => 'Surat yang digunakan untuk memberitahukan suatu informasi kepada pihak terkait',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surat Permohonan',
                'detail' => 'Surat yang diajukan untuk meminta izin atau persetujuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surat Undangan',
                'detail' => 'Surat yang digunakan untuk mengundang pihak terkait ke suatu acara atau rapat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surat Peringatan',
                'detail' => 'Surat resmi yang berisi peringatan terhadap suatu tindakan atau kejadian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

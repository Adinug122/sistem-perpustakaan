<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pinjam;
class PinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Pinjam::create([
            'user_id'      => 2,
            'buku_id'      => 3,
            'tgl_pinjam'   => '2025-01-10',
            'tgl_kembali'  => '2025-01-17',
            'status'       => 'pinjam',
        ]);


    }
}

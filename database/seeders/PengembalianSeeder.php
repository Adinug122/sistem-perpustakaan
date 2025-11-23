<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengembalian;
class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengembalian::create([
            'pinjam_id' => '1',
            'tgl_kembali' => '2025-10-05',
            'denda' => '0'
        ]);   
    }
}

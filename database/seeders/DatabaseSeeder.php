<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'uid' => '53 05 0C A6',
            'nama' => 'MANIS',
            'saldo' => '50000',
        ]);

        Barang::create([
            'nama_barang' => 'snack',
            'harga' => '3000'
        ]);
    }
}

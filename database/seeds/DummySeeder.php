<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $batas = 5;
        for ($i=0; $i < $batas ; $i++) { 
            DB::table('markets')->insert([
                'nama_produk' => Str::random(10),
                'desc_produk' => Str::random(20),
                'jenis_produk' => Str::random(15),
                'brand' => Str::random(8),
                'harga' => Str::random(5),
            ]);
        }
    }
}

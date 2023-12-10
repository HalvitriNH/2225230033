<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Mini Bag',
            'gambar' => 'tas.jpg',
            'harga' => '60000',
            'stok' => '100',
            'keterangan' => 'Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bucket Hat',
            'gambar' => 'topi.jpg',
            'harga' => '75000',
            'stok' => '100',
            'keterangan' => 'Motif : Frog, Duck, Piggy, Kitty, Doggy',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Airpods case',
            'gambar' => 'airpodscase.jpg',
            'harga' => '25000',
            'stok' => '50',
            'keterangan' => 'Hanya case tidak termasuk airpods :D',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Gantungan Gemoy',
            'gambar' => 'gant.jpg',
            'harga' => '15000',
            'stok' => '80',
            'keterangan' => 'Size : tall 6-7 cm',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Head Band Cute',
            'gambar' => 'headband.jpg',
            'harga' => '30000',
            'stok' => '30',
            'keterangan' => 'Motif : Bunny, Bear',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Cardigan Soft Sweater',
            'gambar' => 'cardigan.jpg',
            'harga' => '150000',
            'stok' => '35',
            'keterangan' => 'Color : brokenwhite, pink, yellow, blue',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);
        
    }
}


            

           

           

           




            
    
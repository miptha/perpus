<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Logika Pemrograman Java (Update Version)',
            'slug' => Str::slug('Logika Pemrograman Java'),
            'sampul' => 'buku/java.jpg',
            'penulis' => 'Abdul Kadir',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Mahir Segala Macam Jenis Desain dengan Canva',
            'slug' => Str::slug('Mahir Segala Macam Jenis Desain dengan Canva'),
            'sampul' => 'buku/design.jpg',
            'penulis' => 'Arista Prasetiyo Adi',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 1,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Parodi Negeri Kami: 38 Tahun Timun di Kompas (1985-2023) Jilid 2',
            'slug' => Str::slug('Parodi Negeri Kami: 38 Tahun Timun di Kompas (1985-2023) Jilid 2'),
            'sampul' => 'buku/novel.jpg',
            'penulis' => 'Rahmat Riyadi',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 2,
            'stok' => 10
        ]);
      
        Buku::create([
            'judul' => 'Komik Horor Nusantara: Setan Urban',
            'slug' => Str::slug('Komik Horor Nusantara: Setan Urban'),
            'sampul' => 'buku/komik.jpg',
            'penulis' => 'Bae Dong-sun',
            'penerbit_id' => 2,
            'kategori_id' => 7,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'GANJAR PRANOWO JEMBATAN PERUBAHAN',
            'slug' => Str::slug('GANJAR PRANOWO JEMBATAN PERUBAHAN'),
            'sampul' => 'buku/biografi.jpg',
            'penulis' => 'Litbang Kompas',
            'penerbit_id' => 5,
            'kategori_id' => 6,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'The History of Java',
            'slug' => Str::slug('The History of Java'),
            'sampul' => 'buku/sejarah.jpg',
            'penulis' => 'Thomas Stamford Raffles',
            'penerbit_id' => 5,
            'kategori_id' => 6,
            'rak_id' => 2,
            'stok' => 10
        ]);
    }
}

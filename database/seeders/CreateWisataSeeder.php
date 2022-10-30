<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Seeder;

class CreateWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wisata = [
            [
                'id_wisata'=>'1',
                'title' => 'Curug Deng-deng',
                'categorie' => 'Curug',
                'location' => 'Cipatujah',
                'desc'=> 'Curug Deng-deng adalah ...',
                'status'=>'Pending',
                'picture' => 'wisata1.jpg',
                'maps' => 'map'
            ],
            [
                'id_wisata'=>'2',
                'title' => 'Viewdeck Galunggung',
                'categorie' => 'Pegunungan',
                'location' => 'Galunggung',
                'desc'=> 'Viewdeck galunggung adalah ...',
                'status'=>'Accepted',
                'picture' => 'wisata5.jpg',
                'maps' => 'map'
            ],
            [
                'id_wisata'=>'3',
                'title' => 'Pantai Karang Tawulan',
                'categorie' => 'Pantai',
                'location' => 'Cimanuk,Kec Cikalong',
                'desc'=> 'Pantai Karangtawulan adalah ...',
                'status'=>'Pending',
                'picture' => 'wisata2.jpg',
                'maps' => 'map'
            ],
            [
                'id_wisata'=>'4',
                'title' => 'Karaha Bodas',
                'categorie' => 'Kawah',
                'location' => 'Kadipaten',
                'desc'=> 'Karaha Bodas adalah ...',
                'status'=>'Pending',
                'picture' => 'wisata6.jpg',
                'maps' => 'map'
            ],
            [
                'id_wisata'=>'5',
                'title' => 'Tonjong Canyon',
                'categorie' => 'Sungai',
                'location' => 'Cipatujah',
                'desc'=> 'Tonjong Canyon adalah ...',
                'status'=>'Accepted',
                'picture' => 'wisata4.jpg',
                'maps' => 'map'
            ],
            [
                'id_wisata'=>'6',
                'title' => 'Curug Panetean',
                'categorie' => 'Curug',
                'location' => 'Pangilaran',
                'desc'=> 'Curug Panetean adalah ...',
                'status'=>'Pending',
                'picture' => 'curugpanetean.jpg',
                'maps' => 'map'
            ],
        ];
        foreach ($wisata as $key => $value) {
            Wisata::create($value);}
    }
}

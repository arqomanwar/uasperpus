<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Seeder;

class fakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas')->insert(
            array(
                [
                    'id' =>'1',
                    'nama_fakultas' =>'Pascasar Janah'
                ],
                [
                    'id' =>'2',
                    'nama_fakultas' =>'Fakultas Syariah dan Hukum'
                ],
                [
                    'id' =>'3',
                    'nama_fakultas' =>'Fakultas Tarbiah dan Ilmu Keguruan'
                ],
                [
                    'id' =>'4',
                    'nama_fakultas' =>'Fakultas Dakwah dan Komunikasi'
                ],
                [
                    'id' =>'5',
                    'nama_fakultas' =>'Fakultas Ekonomi dan Bisnis'
                ],
                [
                    'id' =>'6',
                    'nama_fakultas' =>'Fakultas Sains dan Teknologi'
                ])
        );
    }
}

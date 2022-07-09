<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Seeder;

class prodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert(
            array(
                [
                    'id' =>'1001',
                    'fakultas_id' => '1',
                    'nama_prodi' => 'Manajemen Pendidikan Islam'
                ],
                [
                    'id' =>'2001',
                    'fakultas_id' => '2',
                    'nama_prodi' => 'Hukum Keluarga Islam'
                ],
                [
                    'id' =>'2002',
                    'fakultas_id' => '2',
                    'nama_prodi' => 'Perbankan Syariah'
                ],
                [
                    'id' =>'3001',
                    'fakultas_id' => '3',
                    'nama_prodi' => 'Pendidikan Agama Islam'
                ],
                [
                    'id' =>'3002',
                    'fakultas_id' => '3',
                    'nama_prodi' => 'Pendidikan Bahasa Inggris'
                ],
                [
                    'id' =>'3003',
                    'fakultas_id' => '3',
                    'nama_prodi' => 'Pendidikan Guru SD '
                ],
                [
                    'id' =>'3004',
                    'fakultas_id' => '3',
                    'nama_prodi' => 'Pendidikan Guru PAUD'
                ],
                [
                    'id' =>'4001',
                    'fakultas_id' => '4',
                    'nama_prodi' => 'Komunikasi dan Penyiaran Islam'
                ],
                [
                    'id' =>'5001',
                    'fakultas_id' => '5',
                    'nama_prodi' => 'Manajemen'
                ],
                [
                    'id' =>'5002',
                    'fakultas_id' => '5',
                    'nama_prodi' => 'Akuntansi'
                ],
                [
                    'id' =>'5003',
                    'fakultas_id' => '5',
                    'nama_prodi' => 'Ekonomi Islam'
                ],
                [
                    'id' =>'6001',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Teknik Informatika'
                ],
                [
                    'id' =>'6002',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Desain Produk'
                ],
                [
                    'id' =>'6003',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Teknik Industri'
                ],
                [
                    'id' =>'6004',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Teknik Sipil'
                ],
                [
                    'id' =>'6005',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Teknik Elektro'
                ],
                [
                    'id' =>'6006',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Desain Komunikasi Visual'
                ],
                [
                    'id' =>'6007',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Sistem Informasi'
                ],
                [
                    'id' =>'6008',
                    'fakultas_id' => '6',
                    'nama_prodi' => 'Budidaya Perairan'
                ])
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Lowongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // lowongan kerja berdasarkan migration terbaru
        Lowongan::create([
            'company_id' => 1,
            'judul' => 'Junior Web Developer',
            'jenis' => 'kerja',
            'bidang' => 'Teknologi Informasi',
            'perusahaan' => 'PT ApprenTech',
            'deskripsi_singkat' => 'Mencari kandidat yang memiliki kemampuan dalam pengembangan web',
            'deskripsi_lengkap' => 'Mencari kandidat yang memiliki kemampuan dalam pengembangan web, terutama dalam pengembangan front-end',
            'tipe' => 'onsite',
            'lokasi' => 'Jakarta',
            'gaji' => 5000000,
            'kualifikasi' => 'Pendidikan minimal D3, menguasai HTML, CSS, dan JavaScript',
            'deadline' => '2024-06-30',
            'tanggal_mulai' => '2024-07-01',
            'tanggal_berakhir' => '2024-12-31',
        ]);

        // lowongan magang berdasarkan migration terbaru
        Lowongan::create([
            'company_id' => 1,
            'judul' => 'Magang Web Developer',
            'jenis' => 'magang',
            'bidang' => 'Teknologi Informasi',
            'perusahaan' => 'PT ApprenTech',
            'deskripsi_singkat' => 'Mencari mahasiswa yang ingin magang di perusahaan teknologi',
            'deskripsi_lengkap' => 'Mencari mahasiswa yang ingin magang di perusahaan teknologi, terutama dalam pengembangan front-end',
            'tipe' => 'onsite',
            'lokasi' => 'Jakarta',
            'gaji' => 2000000,
            'kualifikasi' => 'Mahasiswa semester 5 ke atas, menguasai HTML, CSS, dan JavaScript',
            'deadline' => '2024-06-30',
            'tanggal_mulai' => '2024-07-01',
            'tanggal_berakhir' => '2024-12-31',
        ]);

        // lowongan kerja berdasarkan migration terbaru
        Lowongan::create([
            'company_id' => 2,
            'judul' => 'Junior Web Developer',
            'jenis' => 'kerja',
            'bidang' => 'Teknologi Informasi',
            'perusahaan' => 'PT Amanah Sejahtera',
            'deskripsi_singkat' => 'Mencari kandidat yang memiliki kemampuan dalam pengembangan web',
            'deskripsi_lengkap' => 'Mencari kandidat yang memiliki kemampuan dalam pengembangan web, terutama dalam pengembangan front-end',
            'tipe' => 'onsite',
            'lokasi' => 'Jakarta',
            'gaji' => 5000000,
            'kualifikasi' => 'Pendidikan minimal D3, menguasai HTML, CSS, dan JavaScript',
            'deadline' => '2024-06-30',
            'tanggal_mulai' => '2024-07-01',
            'tanggal_berakhir' => '2024-12-31',
        ]);

        // lowongan magang online berdasarkan migration terbaru
        Lowongan::create([
            'company_id' => 2,
            'judul' => 'Magang Web Developer',
            'jenis' => 'magang',
            'bidang' => 'Teknologi Informasi',
            'perusahaan' => 'PT Amanah Sejahtera',
            'deskripsi_singkat' => 'Mencari mahasiswa yang ingin magang di perusahaan teknologi',
            'deskripsi_lengkap' => 'Mencari mahasiswa yang ingin magang di perusahaan teknologi, terutama dalam pengembangan front-end',
            'tipe' => 'online',
            'gaji' => 2000000,
            'kualifikasi' => 'Mahasiswa semester 5 ke atas, menguasai HTML, CSS, dan JavaScript',
            'deadline' => '2024-06-30',
            'tanggal_mulai' => '2024-07-01',
            'tanggal_berakhir' => '2024-12-31',
        ]);
    }
}

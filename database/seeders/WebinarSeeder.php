<?php

namespace Database\Seeders;

use App\Models\Webinar;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Webinar::create([
            'company_id' => 1,
            'judul_webinar' => 'Webinar Teknologi Terbaru',
            'narasumber' => 'John Doe',
            'jabatan_narasumber' => 'CTO ApprenTech',
            'tagline' => 'Mengupas Teknologi Masa Depan',
            'deskripsi' => 'Dalam webinar ini, kami akan membahas berbagai teknologi terbaru yang akan mengubah dunia.',
            'tanggal' => Carbon::parse('2024-07-01'),
            'waktu_mulai' => Carbon::parse('10:00:00')->format('H:i:s'),
            'waktu_selesai' => Carbon::parse('12:00:00')->format('H:i:s'),
            'lokasi' => 'Online',
            'platform' => 'Zoom'
        ]);

        Webinar::create([
            'company_id' => 2,
            'judul_webinar' => 'Webinar Pengenalan Bisnis Digital',
            'narasumber' => 'Jane Smith',
            'jabatan_narasumber' => 'CEO di Digital Biz',
            'tagline' => 'Strategi Sukses di Era Digital',
            'deskripsi' => 'Webinar ini akan membahas strategi bisnis yang efektif di era digital.',
            'tanggal' => Carbon::parse('2024-07-05'),
            'waktu_mulai' => Carbon::parse('14:00:00')->format('H:i:s'),
            'waktu_selesai' => Carbon::parse('16:00:00')->format('H:i:s'),
            'lokasi' => 'Gedung Serbaguna',
            'platform' => null
        ]);

        Webinar::create([
            'company_id' => 3,
            'judul_webinar' => 'Webinar Kesehatan Mental',
            'narasumber' => 'Dr. Kevin Lee',
            'jabatan_narasumber' => 'Psikolog',
            'tagline' => 'Menjaga Kesehatan Mental di Tengah Pandemi',
            'deskripsi' => 'Webinar ini akan membahas pentingnya menjaga kesehatan mental selama masa pandemi.',
            'tanggal' => Carbon::parse('2024-07-10'),
            'waktu_mulai' => Carbon::parse('09:00:00')->format('H:i:s'),
            'waktu_selesai' => Carbon::parse('11:00:00')->format('H:i:s'),
            'lokasi' => 'Online',
            'platform' => 'Microsoft Teams'
        ]);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CvSeeder extends Seeder
{
    public function run()
    {
        // Seed Profile
        $profileData = [
            'nama' => 'Mochamad Rizki Ramdani',
            'email' => 'rzkrmdn069@email.com',
            'telepon' => '+62 896-6883-6100',
            'alamat' => 'Jl Bhayangkara Gg Karya 1 Kota Sukabumi, Indonesia',
            'deskripsi' => 'Mahasiswa Teknik Informatika yang sedang belajar dan mengembangkan kemampuan dalam bidang pengembangan perangkat lunak. Memiliki minat yang tinggi terhadap teknologi web development dan terus belajar untuk meningkatkan skill programming.',
            'foto' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('profile')->insert($profileData);

        // Seed Education
        $educationData = [
            [
                'tingkat' => 'Sarjana Teknik Informatika',
                'institusi' => 'Universitas Indonesia',
                'tahun_mulai' => '2022',
                'tahun_selesai' => 'Sekarang',
                'deskripsi' => 'Sedang menempuh pendidikan S1 Teknik Informatika. Fokus belajar pada pemrograman dasar, struktur data, algoritma, dan pengembangan aplikasi web. Aktif mengikuti kegiatan kampus dan belajar mandiri melalui online course.',
                'urutan' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tingkat' => 'Sekolah Menengah Atas',
                'institusi' => 'SMA Negeri 1 Jakarta',
                'tahun_mulai' => '2019',
                'tahun_selesai' => '2022',
                'deskripsi' => 'Jurusan IPA dengan fokus pada matematika dan fisika. Aktif dalam kegiatan ekstrakurikuler dan organisasi sekolah.',
                'urutan' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('education')->insertBatch($educationData);

        // Seed Experience
        $experienceData = [
            [
                'jabatan' => 'Web Developer Intern',
                'perusahaan' => 'PT Teknologi Digital Indonesia',
                'lokasi' => 'Jakarta, Indonesia',
                'tahun_mulai' => '2024',
                'tahun_selesai' => null, // Masih aktif
                'deskripsi' => "Mengembangkan aplikasi web menggunakan PHP dan CodeIgniter 4\nMembuat RESTful API untuk integrasi dengan aplikasi mobile\nMengoptimalkan query database untuk meningkatkan performa aplikasi\nMelakukan testing dan debugging aplikasi web\nBerpartisipasi dalam code review dan standar coding team\nMenggunakan Git untuk version control dan kolaborasi tim",
                'urutan' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Anggota Divisi Teknologi',
                'perusahaan' => 'Himpunan Mahasiswa Teknik Informatika',
                'lokasi' => 'Universitas Indonesia',
                'tahun_mulai' => '2023',
                'tahun_selesai' => null, // Masih aktif
                'deskripsi' => "Bergabung dalam organisasi mahasiswa untuk mengembangkan skill teknologi\nMengikuti workshop dan seminar programming\nBelajar kolaborasi dalam tim untuk mengembangkan proyek-proyek kecil\nMembantu dalam maintenance website organisasi\nAktif mengikuti kegiatan coding challenge dan hackathon\nMengorganisir event teknologi untuk mahasiswa",
                'urutan' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Freelance Web Developer',
                'perusahaan' => 'Proyek Freelance',
                'lokasi' => 'Remote',
                'tahun_mulai' => '2024',
                'tahun_selesai' => null,
                'deskripsi' => "Mengembangkan website untuk klien kecil dan menengah\nMembuat website company profile dengan responsive design\nMengintegrasikan payment gateway untuk e-commerce\nMengoptimalkan SEO dan performa website\nMenyediakan maintenance dan support untuk website klien\nMenggunakan modern web technologies (HTML5, CSS3, JavaScript, PHP)",
                'urutan' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Proyek Pribadi - Website Portfolio',
                'perusahaan' => 'Proyek Belajar Mandiri',
                'lokasi' => 'Remote',
                'tahun_mulai' => '2024',
                'tahun_selesai' => null,
                'deskripsi' => "Mengembangkan website portfolio pribadi menggunakan HTML, CSS, dan JavaScript\nBelajar responsive design dan modern web development\nMengimplementasikan animasi dan interaktifitas menggunakan JavaScript\nMenggunakan Git untuk version control\nMempelajari deployment website ke hosting\nMenggunakan framework Bootstrap untuk mempercepat development",
                'urutan' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Belajar Online Course',
                'perusahaan' => 'Platform Online Learning',
                'lokasi' => 'Online',
                'tahun_mulai' => '2023',
                'tahun_selesai' => null,
                'deskripsi' => "Mengikuti berbagai online course untuk meningkatkan skill programming\nMempelajari dasar-dasar web development (HTML, CSS, JavaScript)\nBelajar framework seperti Bootstrap untuk styling\nMengikuti course tentang database dan SQL\nMempelajari version control dengan Git dan GitHub\nMengikuti course tentang PHP dan CodeIgniter framework",
                'urutan' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Peserta Bootcamp Web Development',
                'perusahaan' => 'Digital Talent Scholarship',
                'lokasi' => 'Online',
                'tahun_mulai' => '2023',
                'tahun_selesai' => '2023',
                'deskripsi' => "Mengikuti program bootcamp intensif selama 3 bulan\nMempelajari full-stack web development (Frontend & Backend)\nMembuat beberapa proyek aplikasi web sebagai portfolio\nMengikuti mentoring session dengan developer berpengalaman\nMenyelesaikan final project dengan tim\nMendapatkan sertifikat kelulusan bootcamp",
                'urutan' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jabatan' => 'Volunteer IT Support',
                'perusahaan' => 'Komunitas Teknologi Lokal',
                'lokasi' => 'Sukabumi, Indonesia',
                'tahun_mulai' => '2022',
                'tahun_selesai' => '2023',
                'deskripsi' => "Membantu maintenance website komunitas\nMemberikan support teknis untuk anggota komunitas\nMengorganisir workshop teknologi untuk pemula\nMembantu setup dan troubleshooting perangkat komputer\nMengelola media sosial dan konten digital komunitas\nBelajar leadership dan manajemen tim",
                'urutan' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('experience')->insertBatch($experienceData);

        // Seed Skills
        $skillsData = [
            [
                'nama' => 'HTML',
                'tingkat' => 75,
                'urutan' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'CSS',
                'tingkat' => 70,
                'urutan' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'JavaScript',
                'tingkat' => 65,
                'urutan' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'PHP',
                'tingkat' => 60,
                'urutan' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'MySQL',
                'tingkat' => 55,
                'urutan' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Git & GitHub',
                'tingkat' => 60,
                'urutan' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Bootstrap',
                'tingkat' => 70,
                'urutan' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'CodeIgniter',
                'tingkat' => 55,
                'urutan' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('skills')->insertBatch($skillsData);
    }
}


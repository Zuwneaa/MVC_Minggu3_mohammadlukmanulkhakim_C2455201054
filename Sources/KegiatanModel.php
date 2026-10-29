<?php

namespace App\Models;

class KegiatanModel
{
    public function semua(): array
    {
        return [
            [
                'id' => 1,
                'judul' => 'Workshop Web',
                'kategori' => 'Teknologi',
                'kuota' => 30,
                'lokasi' => 'Lab Komputer 1'
            ],
            [
                'id' => 2,
                'judul' => 'Pelatihan Desain',
                'kategori' => 'Kreatif',
                'kuota' => 25,
                'lokasi' => 'Studio Multimedia'
            ],
            [
                'id' => 3,
                'judul' => 'Kelas Presentasi',
                'kategori' => 'Komunikasi',
                'kuota' => 20,
                'lokasi' => 'Aula Utama'
            ],
            [
                'id' => 4,
                'judul' => 'Seminar Artificial Intelligence',
                'kategori' => 'Teknologi',
                'kuota' => 50,
                'lokasi' => 'Auditorium Kampus'
            ],
            [
                'id' => 5,
                'judul' => 'Basic Photography',
                'kategori' => 'Kreatif',
                'kuota' => 15,
                'lokasi' => 'Ruang Seni'
            ],
        ];
    }

    public function cari(int $id): ?array
    {
        foreach ($this->semua() as $item) {
            if ($item['id'] === $id) {
                return $item;
            }
        }
        return null;
    }
}

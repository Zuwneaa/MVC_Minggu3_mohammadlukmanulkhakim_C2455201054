<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanModel;

class KegiatanController extends Controller
{
    public function index()
    {
        $model = new KegiatanModel();
        return view('kegiatan.index', [
            'kegiatan' => $model->semua()
        ]);
    }

    public function detail(int $id)
    {
        $model = new KegiatanModel();
        $item = $model->cari($id);

        if ($item === null) {
            abort(404, 'Kegiatan tidak ditemukan.');
        }

        return view('kegiatan.detail', ['item' => $item]);
    }
}
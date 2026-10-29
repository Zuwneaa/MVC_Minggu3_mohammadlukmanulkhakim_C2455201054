<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
    public function index()
    {
        return view('sapa', [
            'judul' => 'Halo, Laravel!',
            'pesan' => 'Saya belajar MVC pada minggu ketiga.'
        ]);
    }

    public function nama(string $nama)
    {
        return view('sapa', [
            'judul' => 'Salam, ' . $nama,
            'pesan' => 'Parameter nama dikirim melalui URL.'
        ]);
    }
}
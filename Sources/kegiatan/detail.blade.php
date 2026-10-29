@include('partials.header', ['judulHalaman' => 'Detail Kegiatan'])
<h2>{{ $item['judul'] }}</h2>
<p>Kategori: {{ $item['kategori'] }}</p>
<p>Kuota: {{ $item['kuota'] }} peserta</p>
<p>Lokasi: {{ $item['lokasi'] }}</p>
<a href="{{ url('kegiatan') }}">Kembali ke daftar</a>
@include('partials.footer')
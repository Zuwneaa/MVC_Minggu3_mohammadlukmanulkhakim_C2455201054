@include('partials.header', ['judulHalaman' => 'Katalog Kegiatan'])
<h2>Daftar Kegiatan</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Kuota</th>
        <th>Aksi</th>
    </tr>
    @foreach ($kegiatan as $item)
    <tr>
        <td>{{ $item['judul'] }}</td>
        <td>{{ $item['kategori'] }}</td>
        <td>{{ $item['kuota'] }} peserta</td>
        <td><a href="{{ url('kegiatan/' . $item['id']) }}">Detail</a></td>
    </tr>
    @endforeach
</table>
@include('partials.footer')
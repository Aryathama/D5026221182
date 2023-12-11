@extends('master2')
@section('title', 'Kategori')

@section('judul_halaman')
<h3>Pilih Kategori</h3>

<br>
@endsection

@section('konten')
    <form action="kategori/cari/" method="POST">
        <label for="nama"></label>
        <select id="nama">
            @foreach ($kategori as $k)
            <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>

@endsection

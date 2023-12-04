@extends('master3')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Nilai Kuliah</h3>

<a href="/nilaikuliah/tambah"> + Tambah Data Baru</a>

<br/>
<br/>
@endsection

@section('konten')
    <p>Cari NRP :</p>
	<form action="/nilaikuliah/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Nilai berdasarkan NRP .." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
            <td>{{ $nk->ID }}</td>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>
            @if ($nk->NilaiAngka <= 40)
                <td>D</td>
            @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                <td>C</td>
            @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                <td>B</td>
            @elseif ($nk->NilaiAngka >= 81 && $nk->NilaiAngka <= 100)
                <td>A</td>
            @endif
            <td>{{ $nk->NilaiAngka*$nk->SKS }}</td>
		</tr>
		@endforeach
	</table>

@endsection

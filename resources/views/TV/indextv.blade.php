@extends('mastertv')
@section('title', 'Database Televisi')

@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Televisi</h3>

<a href="/televisi/tambah"> + Tambah Data Televisi</a>

<br/>
<br/>
@endsection

@section('konten')
    <p>Cari Data Televisi :</p>
	<form action="/televisi/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Televisi berdasarkan merk .." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stok</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($televisi as $t)
		<tr>
			<td>{{ $t->kodetelevisi }}</td>
			<td>{{ $t->merktelevisi }}</td>
            <td>{{ $t->stocktelevisi }}</td>
			@if ($t->stocktelevisi > 0)
                <td>Y</td>
            @else <td>N</td>
            @endif
			<td>
                <a href="/televisi/view/{{ $t->kodetelevisi }}" class="btn btn-success">View</a>
				<a href="/televisi/edit/{{ $t->kodetelevisi }}" class="btn btn-warning">Edit</a>
				<a href="/televisi/hapus/{{ $t->kodetelevisi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection

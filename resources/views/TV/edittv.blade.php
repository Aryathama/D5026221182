@extends('mastertv')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data</h3>

	<a href="/televisi"> Kembali</a>

	<br/>
	<br/>

	@foreach($televisi as $t)
	<form action="/televisi/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->kodetelevisi }}"> <br/>
        <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-8">
               <input required="required" name="merk" type = "text" class = "form-control" id = "merk" value="{{ $t->merktelevisi }}">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "stock" class = "col-sm-2 control-label">Stok</label>
            <div class = "col-sm-8">
               <input required="required" name="stock" type = "text" class = "form-control" id = "stock" value="{{ $t->stocktelevisi }}">
            </div>
        </div>
        {{-- <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               <input required="required" name="tersedia" type = "text" class = "form-control" id = "tersedia" value="{{ $t->tersedia }}">
            </div>
        </div> --}}
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
	@endforeach
@endsection

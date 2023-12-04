@extends('master3')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
               <input required="required" name="NRP" type = "text" class = "form-control" id = "NRP" placeholder = "Masukkan NRP">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
               <input required="required" name="NilaiAngka" type = "number" class = "form-control" id = "NilaiAngka" placeholder = "Masukkan nilai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
               <input required="required" name="SKS" type = "number" class = "form-control" id = "SKS" placeholder = "Masukkan SKS">
            </div>
        </div>
        <div class = "form-group row">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
@endsection

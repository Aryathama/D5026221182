@extends('mastertv')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Televisi</h3>

	<a href="/televisi"> Kembali</a>

	<br/>
	<br/>

	<form action="/televisi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-8">
               <input required="required" name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan merk televisi">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "stock" class = "col-sm-2 control-label">Stok</label>
            <div class = "col-sm-8">
               <input required="required" name="stock" type = "text" class = "form-control" id = "stock" placeholder = "Masukkan stok televisi">
            </div>
        </div>
        {{-- <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               <input required="required" name="tersedia" type = "text" class = "form-control" id = "tersedia" placeholder = "Ketersediaan">
            </div>
        </div> --}}
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
@endsection

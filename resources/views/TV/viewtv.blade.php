@extends('mastertv')

@section('konten')
    <h2 class="text-center">Informasi Televisi</h2><br>

    @foreach($televisi as $t)
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 400px">
                        <div class="card bg-secondary">
                          <div class="card-body text-center">
                            {{-- konten card 1 --}}
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body d-flex flex-column justify-content-center">
                              <p class="card-text">Kode: {{ $t->kodetelevisi }}</p>
                              <p class="card-text">Merk: {{ $t->merktelevisi }}</p>
                              <p class="card-text">Stok: {{ $t->stocktelevisi }}</p>
                              <p class="card-text">Tersedia: {{ $t->tersedia }}</p>
                              <div class="text-center">
                                  <a href="/televisi" class="btn btn-primary">Kembali</a>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

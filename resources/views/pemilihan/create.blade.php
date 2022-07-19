@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">
            Buat Kegiatan
        </div>
        <form method="POST" action="{{ route('pemilihan.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputUsername" class="sr-only">Judul Acara</label>
                <div class="position-relative has-icon-right">

                    <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        value="{{ old('judul') }}" required autocomplete="judul" autofocus
                        placeholder="masukan judul acara">

                    @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="zmdi zmdi-invert-colors"></i>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername" class="sr-only">Tema</label>
                <div class="position-relative has-icon-right">

                    <input id="tema" type="text" class="form-control @error('tema') is-invalid @enderror" name="tema"
                        value="{{ old('tema') }}" required autocomplete="tema" autofocus placeholder="masukan tema acara">

                    @error('tema')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="zmdi zmdi-invert-colors"></i>
                    </div>
                </div>

            </div>

            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <a href="{{ route('pemilihan.index') }}">
                        <button type="button" class="btn btn-warning">
                            Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Lanjut
                    </button>
                </div>
            </div>

        </form>
    </body>

    </html>
@endsection

@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">
            Update Kegiatan
        </div>
        <form method="POST" action="{{ route('pemilihan.update', $pemilihan->id) }}">
            <table cellpadding="20">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Judul Acara</label>
                    <div class="position-relative has-icon-right">

                        <input id="judul" type="text" value="{{ $pemilihan->judul }}"
                            class="form-control @error('judul') is-invalid @enderror" name="judul"
                            value="{{ old('judul') }}" required autocomplete="judul" autofocus>

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

                        <input id="tema" type="text" value="{{ $pemilihan->tema }}"
                            class="form-control  @error('tema') is-invalid @enderror" name="tema"
                            value="{{ old('tema') }}" required autocomplete="tema" autofocus
                            placeholder="masukan tema acara">

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

@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">
            Buat Panduan
        </div>
        <form method="POST" action="{{ route('panduan.store') }}">
            @csrf
            <div class="form-group">
                <h4>Judul Panduan</h4>
            </div>
            <div class="form-group">
                <div class="position-relative has-icon-right">

                    <input id="judul" type="text" class="sel3 @error('judul') is-invalid @enderror" name="judul"
                        value="{{ old('judul') }}" required autocomplete="judul" autofocus
                        placeholder="masukan judul panduan">

                    @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="zmdi zmdi-invert-colors"></i>
                    </div>
                </div>
                <div class="form-group">
                    <h4>isi</h4>
                </div>
                <div class="form-group">
                    <div class="position-relative has-icon-right">

                        <input type="text" name="visi" class="form-controll area3 @error('visi') is-invalid @enderror"
                            value="{{ old('visi') }}" required>
                        @error('visi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row mt-4">
                    <div class="form-group mb-0 col-6">
                        <a href="{{ route('panduan.index') }}">
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

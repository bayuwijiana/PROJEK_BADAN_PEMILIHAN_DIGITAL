@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">
            <h2>{{ $judul }}<span style="color:orange;"> {{ $tema }}</span></h2>
        </div>
        <form method="POST" action="{{ route('kandidat.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputUsername" class="sr-only">Nama</label>
                <div class="position-relative has-icon-right">

                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="masukan nama ">

                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername" class="sr-only">Foto</label>
                <div class="position-relative has-icon-right">

                    <input type="file" name="foto" required>
                    <div class="form-control-position">
                        <i class="zmdi zmdi-invert-colors"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h3 style="color:orange;">visi</h3>
            </div>
            <div class="form-group">
                <div class="position-relative has-icon-right">

                    <textarea cols="60" rows="7" type="text" name="visi" class="form-controll area @error('visi') is-invalid @enderror"
                        value="{{ old('visi') }}" required>
                            </textarea>
                    @error('visi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <h3 style="color:orange;">misi</h3>
            </div>
            <div class="form-group">
                <div class="position-relative has-icon-right">

                    <textarea cols="60" rows="7" type="text" name="misi" class="form-controll  area @error('misi') is-invalid @enderror"
                        value="{{ old('misi') }}" required>

                            </textarea>
                    @error('misi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div>
                <input type="hidden" name="judul" value="{{ $judul }}">
                <input type="hidden" name="tema" value="{{ $tema }}">
                <input type="hidden" name="cek" value="{{ $cek }}">
            </div>




            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <a href="{{ route('admin.index') }}">
                        <button type="button" class="btn btn-warning">
                            Home</button>
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>

        </form>
    </body>

    </html>
@endsection

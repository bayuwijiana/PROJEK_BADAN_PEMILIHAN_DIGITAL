@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">
            DATA PENDUDUK
        </div>
        <form method="POST" action="{{ route('penduduk.store') }}">
            <table cellpadding="20">
                @csrf
                <div class="form-group">
                    <b>NIK</b>
                    <div class="position-relative has-icon-right">

                        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                            value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="MASUKAN NIK">

                        @error('nik')
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
                    <b>NAMA</b>
                    <div class="position-relative has-icon-right">

                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="MASUKAN NAMA">

                        @error('nama')
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
                    <b>JENIS KELAMIN</b>
                    <div class="position-relative has-icon-right">
                        <select name="jenis_kelamin" class="form-control sel1">
                            <option value="Laki Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Alamat</label>
                    <div class="position-relative has-icon-right">
                        <b>KEC</b>
                        <select name="kec" class="sel">
                            @php
                                $x = 0;
                            @endphp
                            @foreach ($kec as $key)
                                <option value="{{ $kec[$x] }}">{{ $kec[$x] }}</option>
                                @php
                                    $x++;
                                @endphp
                            @endforeach
                        </select>
                        <b>DES</b>
                        <select name="des" class=" sel">
                            @php
                                $x = 0;
                            @endphp
                            @foreach ($des as $key)
                                <option value="{{ $des[$x] }}">{{ $des[$x] }}</option>
                                @php
                                    $x++;
                                @endphp
                            @endforeach
                        </select>
                        <b>RT/RW</b>
                        <select name="rt" class="sel2">
                            @for ($x = 1; $x < 8; $x++)
                                <option value="{{ $x }}">{{ $x }}</option>
                            @endfor
                        </select>
                        <select name="rw" class="sel2">
                            @for ($x = 1; $x < 8; $x++)
                                <option value="{{ $x }}">{{ $x }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div>
                    <input type="hidden" name="status" value="belum mendaftar">
                </div>
                <div class="form-row mt-4 ">
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

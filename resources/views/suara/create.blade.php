@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Create Pemilihan</title>
    </head>

    <body>
        <h1>
            <a href="{{ route('pemilihan.index') }}">
                <button class="btn btn-primary">Kembali</button>
            </a>
        </h1>
        <center>
            <form method="POST" action="{{ route('pemilihan.store') }}">
                <table cellpadding="20">
                    @csrf
                    <tr>
                        <td>JUDUL</td>
                        <td>

                            <input type="text" name="judul" placeholder="--nama pemilihan--"
                                class="form-controll
                            @error('judul') is-invalid @enderror"
                                value="{{ old('judul') }}" autofocus required>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </td>
                    </tr>
                    <tr>
                        <td>TEMA</td>
                        <td>

                            <input type="text" name="tema" placeholder="--tema pemilihan--"
                                class="form-controll
                            @error('tema') is-invalid @enderror"
                                value="{{ old('tema') }}" autofocus required>
                            @error('tema')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </td>
                        <input type="hidden" name="status" value="belum dimulai">
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                LANJUT
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>

    </html>
@endsection

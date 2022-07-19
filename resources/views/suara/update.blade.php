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
            <form method="POST" action="{{ route('pemilihan.update', $pemilihan->id) }}">
                <table cellpadding="20">
                    @method('PUT')
                    @csrf
                    <tr>
                        <td>JUDUL</td>
                        <td>

                            <input type="text" name="judul" value="{{ $pemilihan->judul }}"
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

                            <input type="text" name="tema" value="{{ $pemilihan->tema }}"
                                class="form-controll
                            @error('tema') is-invalid @enderror"
                                value="{{ old('tema') }}" autofocus required>
                            @error('tema')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </td>
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

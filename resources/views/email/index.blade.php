@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pencoblosan</title>
    </head>

    <body>
        @if ($role == 'User')
            <h1>
                <a href="{{ route('user.index') }}">
                    <button class="btn btn-primary">Kembali</button>
                </a>
            </h1>
        @else
            <h1>
                <a href="{{ route('admin.index') }}">
                    <button class="btn btn-primary">Kembali</button>
                </a>
            </h1>
        @endif
        <h2>Tanggapan <span style="color:orange">tentang BPD Banyumas </h2>
        <form method="POST" action="/kirim">
            <table cellpadding="10">
                @csrf
                <tr>
                    <td>
                        <input name="isi" class="form-controll area @error('isi') is-invalid @enderror"
                            value="{{ old('isi') }}" required>

                        @error('isi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <input type="hidden" value="bayuwijiana5@gmail.com" name="email">

                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-warning">
                            KIRIM
                        </button>
                    </td>
        </form>
        </tr>
        </table>


    </body>

    </html>
@endsection

@extends('layouts.appCrt')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verivikasi</title>
    </head>

    <body>
        <div class="v2">
            <div class="form-group">
                <div class="position-relative has-icon-right">
                    <h2 style="color: orange">Kode verivikasi</h2>
                    <h3>Masukan kode verivkasi yang dikirimkan ke email anda</h3>
                </div>
            </div>
            <div class="form-group ">
                <div class="position-relative has-icon-right">

                    <form action="{{ route('regis.update', $nik) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="kode_input" class="sel3" placeholder="masukan kode verivikasi">

                        <input type="hidden" name="kode_ver" value="{{ $kode }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="password" value="{{ $password }}">


                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">
                            kirim
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </body>

    </html>
@endsection

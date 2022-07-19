@extends('layouts.appUs')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <div class="m-100">
            <div class="card mt-5 col-lg-10">
                <h2 style="color: orange">Panduan</h2>
                <table>
                    @foreach ($panduan as $key)
                        <tr>
                            <td>
                                <div class="pan">
                                    <h4>{{ $key->judul }}</h4>
                                    <h5>{{ $key->visi }}</h5>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </body>

    </html>
@endsection

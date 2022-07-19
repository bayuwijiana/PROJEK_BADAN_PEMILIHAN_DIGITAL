@extends('layouts.appSS')
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

        <center>
            @if ($role == 'Admin')
                <h1>
                    <a href="{{ route('admin.index') }}">
                        <button class="btn btn-primary">Home</button>
                    </a>
                </h1>
            @else
                <h1>
                    <a href="{{ route('user.index') }}">
                        <button class="btn btn-primary">Home</button>
                    </a>
                </h1>
            @endif
            @if ($stat == 'sudah memilih')
                <h2>Terimakasih sudah memilih</h2>
            @endif
            <table border="2" cellpadding="20">
                <tr>
                    <td>Surat Suara</td>
                    <td>Nama</td>
                    @if ($stat == 'belum memilih')
                        <td>Coblos</td>
                    @endif
                </tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($kandidat as $key)
                    <tr>
                        <td>
                            <img src="/assets2/img/{{ $key->foto }}">
                        </td>
                        <td>{{ $key->nama }}</td>
                        @if ($stat == 'belum memilih')
                            <td>
                                <form action="{{ route('pencoblosan.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="no" value="{{ $no }}">
                                    <button type="submit" name="simpan" class="btn btn-primary">
                                        {{ $no }}
                                    </button>
                                </form>
                            </td>
                        @endif
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </table>
        </center>


    </body>

    </html>
@endsection

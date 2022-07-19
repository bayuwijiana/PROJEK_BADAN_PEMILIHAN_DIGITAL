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

        <div class="card mt-3 oke">
            <div class="card-content">
                <img src="/assets2/img/bawaslu.png" style="height:60px">
                <span style="color:orange;font-size:30px;"> Penyelengaraan Acara</span>
            </div>
        </div>
        <div class="card mt-3 oke ">
            <div class="card-content">
                <h1>
                    @if ($status == 'sedang berlangsung')
                        <h2>Pemilihan Sedang Berlangsung</h2>
                        <a href="{{ route('suara.index') }}">
                            <button class="btn btn-warning">HITUNG</button>
                        </a>
                    @endif
                </h1>
                <table border="2" cellpadding="20" style="margin-bottom:10px">
                    <tr>
                        <td>judul</td>
                        <td>tema</td>
                        <td>status</td>
                        @if ($status == 'belum dimulai' && $role == 'Admin')
                            <td>Action</td>
                        @endif
                    </tr>
                    @foreach ($pemilihan as $key)
                        <tr>
                            <td>{{ $key->judul }}</td>
                            <td>{{ $key->tema }}</td>
                            <td>{{ $key->status }}</td>
                            @if ($status == 'belum dimulai' && $role == 'Admin')
                                <td>
                                    <form action="{{ route('pemilihan.edit', $key->id) }}" method="post">
                                        @method('GET')
                                        <button class="btn btn-primary">
                                            update
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        @if ($status == 'sudah dihitung')
            <div class="card mt-3 oke">
                <div class="card-content">
                    <img src="/assets2/img/bawaslu.png" style="height:60px">
                    <span style="color:orange;font-size:30px;"> Hasil Perolehan</span>
                    @foreach ($pemilihan as $key)
                        <table cellpadding="15px" style="font-size: 20px;font-weight:bold">
                            <tr>
                                <td>{{ $key->judul }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/assets2/img/logo.png" style="height:40px">
                                    Kabupaten Banyumas
                                </td>
                            </tr>
                        </table>
                    @endforeach
                    <table cellpadding="15px" style="font-size: 15px;font-weight:bold">
                        <tr>
                            <td>JUMLAH KANDIDAT</td>
                            <td>: {{ $jum }} KANDIDAT</td>
                        </tr>
                        @for ($i = 1; $i <= $jum; $i++)
                            <tr>
                                <td>KANDIDAT {{ $i }}</td>
                                <td>: {{ $a[$i] }} SUARA</td>
                            </tr>
                        @endfor
                        <tr>
                            <td>JUMLAH PENDUDUK</td>
                            <td>: {{ $jumpen }}</td>
                        </tr>
                        <tr>
                            <td>TOTAL SEMUA SUARA</td>
                            <td>: {{ $jumpel }}</td>
                        </tr>
                        <tr>
                            <td>TOTAL TIDAK MENGGNAKAN SUARA</td>
                            <td>: {{ $jumpen - $jumpel }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
    </body>

    </html>
@endsection

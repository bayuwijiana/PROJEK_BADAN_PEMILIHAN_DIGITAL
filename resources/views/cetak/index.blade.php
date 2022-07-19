@extends('layouts.appSS')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CETAK</title>
    </head>

    <body>

        <div class="cetak">
            <center>
                <div style="width: 70%;height:1000px ;border:1px solid lightgray;">
                    <div class="x">
                        <div class="y">
                            <img src="/assets2/img/logo.png" class="cetimg1">
                            <div>
                                <h2> BADAN PEMILIHAN DIGITAL</h2>
                                <h3>KABUPATEN BANYUMASH </h3>
                            </div>
                            <img src="/assets2/img/kpu.png" class="cetimg2">
                        </div>
                    </div>
                    </td>
                    </tr>
                    <div class="card-content" style="margin-top: 20px">
                        <img src="/assets2/img/bawaslu.png" style="height:40px">
                        <span style="color:orange;font-size:30px;"> Hasil Perolehan</span>
                        @foreach ($pemilihan as $key)
                            <table cellpadding="15px" style="font-size: 20px;font-weight:bold">
                                <tr>
                                    <td>{{ $key->judul }}</td>
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
            </center>
        </div>
    </body>

    </html>
@endsection

@extends('layouts.appAd')
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
                <h2>Data Penduduk</h2>

                <div style="display:flex;margin-bottom:10px">
                    @if ($stat != 'sedang berlangsung' && $stat != 'sudah dihitung')
                        <a href="{{ route('penduduk.create') }}">
                            <button class="btn btn-warning">Tambah Data</button>
                        </a>
                    @endif
                </div>
                <div style="display:flex;margin-bottom:10px">
                    <form action="{{ route('suara.edit', $stat) }}" method="post">
                        @csrf
                        @method('GET')
                        <table>
                            <tr>
                                <td>
                                    <input type="text" name="cari" class="form-control" style="width:600px"
                                        placeholder="Search Nama ">
                                </td>
                                <td>
                                    <button class="btn btn-info" type="submit">
                                        Cari
                                    </button>
                                </td>
                            </tr>
                            <input type="hidden" name="stat" value="{{ $stat }}">
                        </table>
                    </form>
                </div>

                <table border="2" cellpadding="20">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Jenis Kelelamin</td>
                        <td>Status</td>
                        @if ($stat != 'sedang berlangsung' && $stat != 'sudah dihitung')
                            <td>Action</td>
                        @endif
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($penduduk as $key)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $key->nama }}</td>
                            <td>{{ $key->alamat }}</td>
                            <td>{{ $key->jenis_kelamin }}</td>
                            <td>{{ $key->status }}</td>
                            @if ($stat != 'sedang berlangsung' && $stat != 'sudah dihitung')
                                <td>
                                    <form action="{{ route('penduduk.edit', $key->id) }}" method="post">
                                        @method('GET')
                                        <button class="btn btn-primary">
                                            update
                                        </button>
                                    </form>
                                    <form action="{{ route('penduduk.destroy', $key->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </body>

    </html>
@endsection

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
                @if ($status == 'belum dimulai' && $role == 'Admin')
                    <h1>
                        <a href="{{ route('kandidat.create') }}">
                            <button class="btn btn-primary">Tambah Kandidat</button>
                        </a>
                    </h1>
                @endif

                @if ($status == 'sedang berlangsung')
                    <h2>Pemilihan sedang berlangsung</h2>
                @endif
                <table border="2" cellpadding="20">
                    <tr>
                        <td>No</td>
                        <td></td>
                        <td>Nama</td>
                        <td>Visi</td>
                        <td>Misi</td>
                        @if ($status == 'belum dimulai')
                            <td>Action</td>
                        @endif
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kandidat as $key)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="/assets2/img/{{ $key->foto }}" style="height: 110px;">
                            </td>
                            <td>{{ $key->nama }}</td>
                            <td>{{ $key->visi }}</td>
                            <td>{{ $key->misi }}</td>
                            @if ($status == 'belum dimulai' && $role == 'Admin')
                                <td>
                                    <form action="{{ route('kandidat.edit', $key->id) }}" method="post">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-primary">
                                            UPDATE
                                        </button>
                                    </form>
                                    <form action="{{ route('kandidat.destroy', $key->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
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

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
                <h2 >Panduan</h2>
                <div style="display:flex;margin-bottom:10px">
                    <a href="{{ route('panduan.create') }}">
                        <button class="btn btn-warning">Tambah Data</button>
                    </a>
                </div>
                <table border="1" cellpadding="20">
                    <tr>
                        <td>Judul</td>
                        <td>Isi</td>
                        @if ($role == 'Admin')
                            <td>Action</td>
                        @endif
                    </tr>
                    @foreach ($panduan as $key)
                        <tr>
                            <td>{{ $key->judul }}</td>
                            <td>{{ $key->visi }}</td>
                            @if ($role == 'Admin')
                                <td>
                                    <form action="{{ route('panduan.edit', $key->id) }}" method="post">
                                        @method('GET')
                                        <button class="btn btn-primary">
                                            update
                                        </button>
                                    </form>
                                    <form action="{{ route('panduan.destroy', $key->id) }}" method="post">
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

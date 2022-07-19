@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Create Pemilihan</title>
    </head>

    <body>
        <h1>
            {{ $judul }}
        </h1>
        <h2>
            {{ $tema }}
        </h2>
        <h1>
            <a href="{{ route('kandidat.index') }}">
                <button class="btn btn-primary">Kembali</button>
            </a>
        </h1>
        <center>
            <form method="POST" action="{{ route('kandidat.update', $data->id) }}">
                <table cellpadding="10">
                    @csrf
                    @method('PUT')
                    <tr>
                        <td>NAMA</td>
                        <td>
                            <input type="text" name="nama" value="{{ $data->nama }}"
                                class="form-controll
                            @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" autofocus required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </td>
                    </tr>
                    <tr>
                        <td>FOTO</td>
                        <td>
                            <input type="file" name="foto" value="{{ $data->foto }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>VISI</td>
                        <td>
                            <textarea cols="60" rows="5" type="text" name="visi" class="form-controll @error('visi') is-invalid @enderror"
                                value="{{ $data->visi }}" required>

                            </textarea>
                            @error('visi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>MISI</td>
                        <td>
                            <textarea cols="60" rows="5" type="text" name="misi" class="form-controll @error('misi') is-invalid @enderror"
                                value="{{ $data->misi }}" required>

                            </textarea>
                            @error('misi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="judul" value="{{ $judul }}">
                        <input type="hidden" name="tema" value="{{ $tema }}">
                        <input type="hidden" name="cek" value="{{ $cek }}">

                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>

    </html>
@endsection

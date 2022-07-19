@extends('layouts.app2')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login</title>

    </head>

    <body class="bg-theme bg-theme1">

        <form method="POST" action="{{ route('regis.store') }}">
            @csrf
            <div class="form-group" method="POST">
                <label for="exampleInputUsername" class="sr-only">nik</label>
                <div class="position-relative has-icon-right">

                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                        value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="Masukan nik anda">

                    @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">email</label>
                <div class="position-relative has-icon-right">

                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Masukan email anda">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Masukan Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Confirm Password </label>
                <div class="position-relative has-icon-right">

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Confirm Password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>

            </div>
            <div>
                <input type="hidden" name="role" value="User">
                <input type="hidden" name="status" value="belum memilih">
            </div>

            <div class="form-row">
                <div class="form-group col-6">
                    <div class="icheck-material-white">
                        <input type="checkbox" id="user-checkbox" checked="" />
                        <label for="user-checkbox">Remember me</label>
                    </div>
                </div>
                <div class="form-group col-6 text-right">
                    <input type="reset" class="btn btn-info">

                </div>
            </div>
            <button type="submit" class="btn btn-light btn-block">Sign In</button>
            <div class="text-center mt-3">Sign In With</div>

            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <a href="/">
                        <button type="button" class="btn btn-light btn-block">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            Kembali</button>
                    </a>
                </div>
                <div class="form-group mb-0 col-6 text-right">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-light btn-block">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            Login</button>
                    </a>
                </div>
            </div>

        </form>
    </body>

    </html>
@endsection

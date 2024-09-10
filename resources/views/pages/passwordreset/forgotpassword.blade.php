@inject('comp_model', 'App\Models\ComponentsData')
<?php
$pageTitle = 'Lupa Password'; //set dynamic page title
?>
@extends('layouts.info')
@section('title', $pageTitle)
@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body mt-5">
                    <div>
                        <h3>Reset Password </h3>
                        <div class="text-muted">
                            Please provide the valid email address you used to register
                        </div>
                    </div>
                    <hr />
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-10">
                                <input required type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" />
                            </div>
                            <div class="col-2">
                                <button class="btn btn-success" type="submit">
                                    Send
                                    <i class="material-icons">email</i>
                                </button>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="alert alert-danger animated bounce">{{ $errors->first('email') }}</div>
                        @endif
                    </form>

                    <div class="text-info p-3">
                        A link will be sent to your email containing the information you need for your password
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="card text-center justify-content-center" style="width: 500px;">
                <div class="card-header h5 text-white bg-success mt-2">Reset Password</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Masukan alamat Email anda dan kami akan mengirimkan anda email yang berisi instruksi untuk mengatur
                        ulang kata sandi anda.
                    </p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="flex-row">
                            <label class="form-label mb-2" for="typeEmail">Masukan Email</label>
                            <div data-mdb-input-init class="form-outline mb-3">
                                <input required type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" />
                            </div>
                            <button data-mdb-ripple-init class="btn btn-success w-100" type="submit">Reset
                                password</button>
                        </div>
                        @if ($errors->has('email'))
                            <div class="alert alert-danger animated bounce">{{ $errors->first('email') }}</div>
                        @endif
                    </form>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url('index/login') }}">Login</a>
                        <a href="{{ url('index/register') }}">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('pagecss')
    <style>
        .bg-register {
            background-image: url('/images/bg/b2.png');
            /* background-color: #58bf39; */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        < !--custom page css -->< !--pagecss-->
    </style>
@endsection
@endsection

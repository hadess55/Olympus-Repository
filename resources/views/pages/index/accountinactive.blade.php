@extends('layouts.info')
@section('content')
    <div class="container">
        <div class="my-4 text-center p-4 card-4">
            <i class="material-icons mi-lg text-danger">block</i>
            <div class="h4 text-bold text-danger my-3">
                Akun Kamu Tidak Aktif
            </div>
            <div class="text-muted">
                Mohon Hubungi Admin Untuk Info Lebih Lanjut
            </div>
            <hr class="my-md" />
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="material-icons">home</i> Continue</a>
        </div>
    </div>
@endsection

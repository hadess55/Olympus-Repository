@extends('layouts.info')
@section('content')
    <div class="container">
        <div class="my-4 text-center p-4 card-4">
            <i class="material-icons mi-lg text-warning">account_box</i>
            <div class="h4 text-bold text-warning my-3">
                Akun Kamu Sedang Menunggu Untuk diSetujui
            </div>
            <div class="text-muted">
                Hubungi Admin Intuk Informasi Selanjutnya
            </div>
            <hr class="my-md" />
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="material-icons">home</i> Continue</a>
        </div>
    </div>
@endsection

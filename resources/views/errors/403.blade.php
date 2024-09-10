@extends('errors::minimal')

@section('title', __('Hanya Admin Yang Bisa Akses!'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Hanya Admin Yang Bisa Akses!'))

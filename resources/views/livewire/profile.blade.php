<!-- resources/views/livewire-sample.blade.php -->
@extends('adminlte::page')
<!-- resources/views/livewire/sample-component.blade.php -->

@section('title', 'Profile')

@section('content_header')
    <h1><i class="fas fa-address-card" aria-hidden="true"> Profile Anggota </i></h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        @livewire('profile.idx')
    </div>
</div>

@stop

@section('css')
    <!-- Tambahkan CSS khusus jika diperlukan -->
@stop

@section('js')
    <!-- Tambahkan JavaScript khusus jika diperlukan -->
@stop

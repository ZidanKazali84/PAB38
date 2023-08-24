<!-- resources/views/livewire-sample.blade.php -->
@extends('adminlte::page')
<!-- resources/views/livewire/sample-component.blade.php -->

@section('title', 'Admin Panel')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"> Beranda </i></h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header bg-dark">
                <h1 class="title" style="color:rgba(255, 217, 0, 0.863); font-family:cursive"><i class="fas fa-newspaper"> <b style="font-family:arial">Kegiatan</b></i></h1>
            </div>
            <div class="card-body ">
                @livewire('sample-component')
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <!-- Tambahkan CSS khusus jika diperlukan -->
@stop

@section('js')
    <!-- Tambahkan JavaScript khusus jika diperlukan -->
@stop

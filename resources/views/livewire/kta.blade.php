<!-- resources/views/livewire-sample.blade.php -->
@extends('adminlte::page')
<!-- resources/views/livewire/sample-component.blade.php -->

@section('title', 'kta')

@section('content_header')
    <h1><i class="fa fa-id-card" aria-hidden="true"> Kartu Tanda Anggota Kabumi </i></h1> 
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        @livewire('kta.idx')
    </div>
</div>

@stop

@section('css')
    <!-- Tambahkan CSS khusus jika diperlukan -->
@stop

@section('js')
    <!-- Tambahkan JavaScript khusus jika diperlukan -->
@stop

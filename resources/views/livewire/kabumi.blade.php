<!-- resources/views/livewire-sample.blade.php -->
@extends('adminlte::page')
<!-- resources/views/livewire/sample-component.blade.php -->

@section('title', 'Kabumi')

@section('content_header')
    <h1 style="font-size:54pt; font-family:arial"> <img src="{{ asset('vendor\adminlte\dist\img\UPI.png') }}" class="profile-image" alt="Profile"> Tentang KABUMI UPI</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header bg-dark">
                <h1 class="title" style="color:rgba(255, 217, 0, 0.863); font-family:cursive"><i class="fas fa-newspaper"> <b style="font-family:arial">Informasi</b></i></h1>
            </div>
            <div class="card-body ">
                @livewire('kabumi.idx')
            </div>
        </div>
    </div>
</div>
<style>
    .profile-image-wrapper {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #474afc7c;
      box-shadow: 0px 0px 0px 5px #5500f1;
      position: relative;
      margin-bottom: 20px;
    }
    
    .profile-image {
      width: 17%;
      height: 17%;
      object-fit: cover;
    }
    
    .profile-title {
      margin: 0;
    }
    
    .profile-info {
      text-align: center;
    }
    
    .profile-name {
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .profile-nim,
    .profile-email,
    .profile-phone {
      margin-bottom: 0;
    }
    </style>
    
@stop

@section('css')
    <!-- Tambahkan CSS khusus jika diperlukan -->
@stop

@section('js')
    <!-- Tambahkan JavaScript khusus jika diperlukan -->
@stop

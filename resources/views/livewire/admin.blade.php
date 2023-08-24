<!-- resources/views/livewire-sample.blade.php -->
@extends('adminlte::page')
<!-- resources/views/livewire/sample-component.blade.php -->

@section('title', 'Admin Panel')

@section('content_header')
    <h1><i class="fas fa-address-book" aria-hidden="true"> Administrasi </i></h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header bg-dark">
                <h1 class="title" style="color:rgba(255, 217, 0, 0.863); font-family:cursive"><i class="fas fa-toolbox"> <b style="font-family:arial">Panel Pengaturan</b></i></h1> 
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId1">
                            Informasi Beranda
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informasi Beranda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Informasi Beranda
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-3 mb-3">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modelId2">
                            Informasi Kabumi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informasi Kabumi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Informasi Kabumi
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-3 mb-3">
                        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#modelId3">
                            Presensi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId3" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Presensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Presensi
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @livewire('admin.idx')
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

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
                    <br>
                    <br>
                    <div style="margin-left:50pt;padding: 10pt">
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modelId1">
                            Informasi Beranda
                        </button>
                        <!-- Modal 1 -->
                        <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId1" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informasi Beranda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Informasi Beranda
                                        <button type="button" class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div style="padding: 10pt">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modelId2">
                            Informasi Kabumi
                        </button>
                        <!-- Modal 2 -->
                        <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informasi Kabumi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Informasi Kabumi
                                        <button type="button" class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div style="padding: 10pt">
                        <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#modelId3">
                            Presensi
                        </button>
                        <!-- Modal 3 -->
                        <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId3" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Presensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Konten untuk Presensi
                                        <button type="button" class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div style="padding: 10pt">
                        <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modelId4">
                            Agenda
                        </button>
                        <!-- Modal 4 -->
                        <div class="modal fade" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId4" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Agenda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="card">
                                                <div class="card-body">
                                                    Konten dan fitur Agenda
                                                    <button type="button" class="btn btn-success">Add</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                               <div class="row">
                                                <button type="button" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit</button>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    @livewire('admin.idx')
                </div>
                
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

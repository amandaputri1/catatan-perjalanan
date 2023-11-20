@extends('layouts.master')
@section('title','catatan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('auth.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class=" form-control" name="tanggal" id="tanggal" placeholder="Masukan tanggal" value="{{ $catatan->tanggal }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="text" class=" form-control" name="waktu" id="waktu" placeholder="Masukan Waktu" value="{{ $catatan->waktu }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukan Lokasi" value="{{ $catatan->lokasi }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="text" class="form-control" name="suhu" id="suhu" placeholder="Masukan Suhu" value="{{ $catatan->suhu }}" disabled>
                            </div>
                        </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('catatan.index') }}" class="btn btn-primary">Back</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
 @endsection
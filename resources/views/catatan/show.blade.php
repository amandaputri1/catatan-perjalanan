@extends('layouts.master')
@section('title','catatan')
@section('content')
<link rel="stylesheet" href="{{ asset('views\style\css.blade.php') }}">
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Catatan Perjalanan</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Riwayat Perjalanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Form Siswa</h3>
                            </div> --}}
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
    </div>
</body>
 @endsection
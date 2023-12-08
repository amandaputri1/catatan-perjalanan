@extends('layouts.master')
@section('title', 'catatan')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="page-heading">
            <div class="page-title">
                <link rel="stylesheet" href="{{ asset('resources/views/style/css.blade.php') }}">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Catatan Perjalanan</h3>
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
        <body class="background-class">
            <section class="section">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    {{-- <div class="card-header">
                                        <h3 class="card-title">Data Siswa</h3>
                                    </div> --}}
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="{{ route('catatan.update', $catatan->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $catatan->user->name }}">
                                            </div>
                                            <input type="hidden" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{ $catatan->user->id }}">
                                            @error('nama')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="Masukan Kode" value="{{ $catatan->tanggal }}">
                                            </div>
                                            @error('tanggal')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="waktu">Waktu</label>
                                                <input type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu" id="waktu" placeholder="Masukan waktu" value="{{ $catatan->waktu }}">
                                            </div>
                                            @error('waktu')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="lokasi">Lokasi</label>
                                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukan Lokasi" value="{{ $catatan->lokasi }}" >
                                            </div>
                                            @error('lokasi')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="suhu">Suhu</label>
                                                <input type="text" class="form-control" name="suhu" id="suhu" placeholder="Masukan suhu" value="{{ $catatan->suhu }}" >
                                            </div>
                                            @error('suhu')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('catatan.index') }}" class="btn btn-primary">Back</a>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                        <!-- /.content -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </div>

@endsection
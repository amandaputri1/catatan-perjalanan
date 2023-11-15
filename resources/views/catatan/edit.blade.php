@extends('layouts.master')
@section('title', 'catatan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Catatan</h1>
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
                            <h3 class="card-title">Data Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('catatan.update', $catatan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
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
</div>

@endsection
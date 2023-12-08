@extends('layouts.master')
@section('title', 'catatan')
@section('content')
<link rel="stylesheet" href="{{ asset('resources/views/style/css.blade.php') }}">

    <body class="background-class">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Catatan Perjalanan</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Riwayat Perjalanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="section">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    {{-- <div class="card-header">
                                        <h3 class="card-title"> Tambah Catatan Perjalanan</h3>
                                    </div> --}}
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="{{ route('catatan.store') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="hidden" class="form-control" name="user_id" id="Nama"
                                                    placeholder="Masukkan Nama" value="{{ auth()->user()->id }}">
                                                <input type="text" class="form-control" name="" id="Nama"
                                                    placeholder="Masukan Nama" value="{{ auth()->user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal" id="tanggal"
                                                    placeholder="Masukan kode">
                                            </div>
                                            <div class="form-group">
                                                <label for="waktu">Jam</label>
                                                <input type="time" class="form-control" name="waktu" id="waktu"
                                                    placeholder="Masukan jam">
                                            </div>
                                            <div class="form-group">
                                                <label for="lokasi">Lokasi yang dikunjungi</label>
                                                <input type="text" class="form-control" name="lokasi" id="lokasi"
                                                    placeholder="Masukan lokasi">
                                            </div>
                                            <div class="form-group">
                                                <label for="suhu">Suhu</label>
                                                <input type="text" class="form-control" name="suhu" id="suhu"
                                                    placeholder="Masukan suhu">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <!-- /.content -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection

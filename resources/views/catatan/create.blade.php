@extends('layouts.master')
@section('title', 'catatan')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
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
                                <h3 class="card-title">Catatan Perjalanan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('catatan.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
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
    </div>
@endsection
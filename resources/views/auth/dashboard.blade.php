@extends('layouts.master')
@section('title', 'dashboard')
@section('content')

    <link rel="stylesheet" href="{{ asset('resources\views\style\css.blade.php') }}">
    <div class="page-heading">
        <h3>Dashboard Perjalanan</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('template/dist/assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                <h6 class="text-muted mb-0">Selamat Datang {{ Auth::user()->name }} di Aplikasi Peduli Diri</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="row">
                    @can('isUser')
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Total Perjalanan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlah_perjalanan }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endcan
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="card-header">
                                    <h4>Peduli Diri</h4>
                                    <p>Aplikasi ini digunakan sebagai diri perjalanan di masa pandemi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

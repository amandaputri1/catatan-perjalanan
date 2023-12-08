@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
<link rel="stylesheet" href="{{ asset('resources\views\style\css.blade.php') }}">
<div class="page-content"> 
    <section class="row">
            {{-- <div class="card-body">
                <div class="alert alert-primary">
                    Selamat Datang {{ Auth::user()->name}} di aplikasi PEDULI DIRI
                </div>
            </div> --}}
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6" >
                                <div class="card" style="background-color: #ffff;">
                                    
                                    <div class="card-body" style="color: #2F5B68">
                                        <h6 class="card-title">Selamat Datang {{ Auth::user()->name}} di aplikasi PEDULI DIRI</h6>
                                    </div>
                                </div>
                                <div class="card" style="background-color: #ffff;">
                                    
                                    <div class="card-body" style="color: #2F5B68">
                                        <h6 class="card-title">Aplikasi ini digunakan sebagai diri perjalanan di masa pandemi</h6>
                                    </div>
                                </div>
                                <div class="card" style="background-color: #ffff;">
                                    
                                    <div class="card-body" style="color: #2F5B68">
                                        <h6 class="card-title">Aplikasi ini digunakan sebagai diri perjalanan di masa pandemi</h6>
                                        <p class="card-text">bertaraf internasional yang menghasilkan lulsan kreatif,inonatif dan profesional serta berdaya saing tinggi berlandaskan iman dan taqwa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                {{-- <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img src="template/dist/assets/static/images/bg.jpg"
                                alt="bg" style=" height: 39rem; width: 40rem; left: 50rem; right:50%  ">
                    </div>
                </div> --}}
           
    </section>
</div>
@endsection 
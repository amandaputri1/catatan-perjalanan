@extends('layouts.master')
@section('title', 'dashboard')
@section('content')

    <div class="page-content"> 
        <section class="row">
            <div class="col-9 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-12 col-md-4">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    
                                        <h5>Selamat Datang {{ Auth::user()->name}} di aplikasi PEDULI DIRI </h5>
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>   
@endsection 
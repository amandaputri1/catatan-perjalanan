@extends('layouts.master')
@section('title', 'catatan')
@section('content')

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
  <section class="section">
      <div class="card">
          <div class="card-body">
              <table class="table table-striped" id="table1">
                  <thead>
                      <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @forelse ($catatans->unique('user_id') as $key => $value)
                      <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $value->user->name}}</td>
                        <td>
                          <a href="{{ route('user.show', $value->user->id)}}" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td>Data masih kosong</td>
                      </tr>
                    @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </section>
</div>
@endsection

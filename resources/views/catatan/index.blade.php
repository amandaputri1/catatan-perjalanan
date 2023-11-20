@extends('layouts.master')
@push('css')

  <link rel="stylesheet" href="{{ asset('template/dist/assets/extensions/simple-datatables/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/table-datatable.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/app-dark.css') }}">
@endpush


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Simple Datatable
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
              <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top">
                  <div class="dataTable-dropdown">
                    <select class="dataTable-selector form-select" style="width: 7%">
                      <option value="5">5</option>
                      <option value="10" selected>10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                    </select>
                    <label> entries per page</label>
                  </div>
                  <div class="dataTable-search"> 
                    <input class="dataTable-input" placeholder="Search..." type="text">
                  </div>
                </div> 
              </div>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($catatan as $key => $value)
                    <form action="{{ route('catatan.destroy', $value->id)}}" method="post">
                     @method('DELETE')
                      <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $value->tanggal}}</td>
                        <td>{{ $value->waktu}}</td>
                        <td>{{ $value->lokasi}}</td>
                        <td>{{ $value->suhu}}</td>

                        <td>
                          <form action="{{route ('catatan.destroy', $value->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                              <a href="{{ route('catatan.show', $value->id)}}" class="btn btn-sm btn-primary">Show</a>
                              <a href="{{ route('catatan.edit', $value->id)}}" class="btn btn-sm btn-warning">Edit</a>
                          <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
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
@endsection

    @push('script')
    <script src="{{ asset('template/dist/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('template/dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/dist/assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('template/dist/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('template/dist/assets/static/js/pages/simple-datatables.js') }}"></script>

   <!-- Page specific script -->
    {{-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false, 
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    @endpush --}}

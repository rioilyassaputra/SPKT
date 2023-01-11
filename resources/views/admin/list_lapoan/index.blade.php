@extends('layoutadmin.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">DataTables</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">List laporan</h6>
          <div class="row">

{{--
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn">
                    Masukkan Kategori Laporan
                  </button> --}}


              </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th>Nama Pelapor</th>
                <th>Alamat Pelapor</th>
                <th>No Laporan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                @forelse ($listlaporan as $Laporan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Laporan->nama_Pelapor }}</td>
                <td>{{ $Laporan->alamat }}</td>
                <td>{{ $Laporan->no_laporan }}</td>
                <td>{{ $Laporan->status }}</td>
                <td>

                </td>
              </tr>
              @empty
              <div class="alert alert-danger">
                  Data Laporan belum Tersedia.
              </div>
          @endforelse
            </tbody>
          </table>
        </div>
      </div>

      {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kategori-laporan.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan Kategori Laporan</label>
                  <input type="text" class="form-control @error('nama_kategori_laporan') is-invalid @enderror" value="{{ old('nama_kategori_laporan') }}" name="nama_kategori_laporan" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Masukkan Kategori Laporan">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div> --}}




@endsection

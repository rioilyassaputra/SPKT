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
          <h6 class="m-0 font-weight-bold text-primary">Data Kategori Kehilangan</h6>
          <div class="row">


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn">
                    Masukkan Kategori kehilangan
                  </button>


              </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th>Nama Barang Hilang</th>
                <th>Persyaratan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($kategorikehilangan as $kehilangan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kehilangan->nama_kehilangan }}</td>
                <td>{{ $kehilangan->persyaratan }}</td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editkategori"
                    id="#myBtn">edit </button>
                         <form onsubmit="return confirm('Apakah Anda Yakin ?');"  action="/kategori-kehilangan/{{$kehilangan->id_kategori_kehilangan}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                     </td>
              </tr>
              @empty
              <div class="alert alert-danger">
                  Data kategori kehilangan belum Tersedia.
              </div>
          @endforelse
            </tbody>
          </table>
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <form action="{{ route('kategori-kehilangan.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan Kategori kehilangan</label>
                  <input type="text" class="form-control @error('nama_kehilangan') is-invalid @enderror" name="nama_kehilangan" id="exampleInputEmail1" aria-describedby="emailHelp"
                   >
                  <small id="emailHelp" class="form-text text-muted">masukkan kategori barang yang hilang.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan persyaratan </label>
                  {{-- <input type="text" class="form-control" name="persyaratan" id="exampleInputEmail1" aria-describedby="emailHelp"
                   > --}}
                   <textarea name="persyaratan" id="exampleInputEmail1" class="form-control @error('persyaratan') is-invalid @enderror"  rows="5"></textarea>
                  <small id="emailHelp" class="form-text text-muted">masukkan persyaratan menebus barang yang hilang.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection

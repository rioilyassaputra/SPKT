@extends('layoutadmin.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Kehilangan</h6>
        </div>
        <div class="card-body">
    <form action="{{ route('kategori-kehilangan.update', $kategori_kehilangan) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Masukkan Kategori kehilangan</label>
          <input type="text" class="form-control @error('nama_kehilangan') is-invalid @enderror"  value="{{ old('nama_kategori_kehilangan', $kategori_kehilangan->nama_kategori_kehilangan) }}"  name="nama_kehilangan" id="exampleInputEmail1" aria-describedby="emailHelp"
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

@endsection

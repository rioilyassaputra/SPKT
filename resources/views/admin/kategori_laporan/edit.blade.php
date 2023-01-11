@extends('layoutadmin.main')

@section('content')


<div class="row justify-content-center">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mt-2 mb-5">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Kehilangan</h6>
        </div>
        <div class="card-body">
    <form action="{{ route('kategori-laporan.update', $kategori_laporan ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">edit Kategori Laporan</label>
          <input type="text" class="form-control @error('nama_kategori_laporan') is-invalid @enderror" value="{{ old('nama_kategori_laporan', $kategori_laporan->nama_kategori_laporan) }}"  name="nama_kategori_laporan" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="edit Kategori Laporan">
          <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
      </div>
    </div>


@endsection

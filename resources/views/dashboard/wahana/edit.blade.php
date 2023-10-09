@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex flex-column col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Wahana</h1>
    </div>
    <div class="col-md-5">

    </div>
    <div class="col-md-5">
    <form method="post" action="/dashboard/wahana/{{ $wahana->id }}" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama Wahana</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $wahana->name) }}">
          @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
        </div>

        <div class="mb-3">
          <label for="cover" class="form-label">Sampul</label>
          <input class="form-control" type="file" id="cover" name="cover">
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Keterangan</label>
          <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" required value="{{ old('body') }}">{{ $wahana->body }}</textarea>
          @error('body')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/dashboard/wahana" class="btn btn-warning">Kembali</a>
      </form>
    </div>

</div>
    
@endsection
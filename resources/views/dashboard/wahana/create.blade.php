@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex flex-column col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="bi bi-file-earmark-plus"></i> Tambah Wahana</h1>
    </div>
    
    <div class="col-md-5">
    <form method="POST" action="/dashboard/wahana" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama Wahana</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
          @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
        </div>

        <div class="mb-3">
          <label for="cover" class="form-label">Sampul</label>
          <input class="form-control @error('cover') is-invalid @enderror" type="file" id="cover" name="cover">
          @error('cover')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        
        <div class="mb-3">
          <label for="images" class="form-label">Image</label>
          <input class="form-control @error('images') is-invalid @enderror" type="file" id="images" name="images[]" multiple>
        </div>
        @error('images')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror

        <div class="mb-3">
          <label for="body" class="form-label">Keterangan</label>
          <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
          @error('body')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="/dashboard/wahana" class="btn btn-warning">Kembali</a>
      </form>
    </div>

</div>
    
@endsection

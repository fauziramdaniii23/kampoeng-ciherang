@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex flex-column col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="bi bi-file-earmark-plus"></i> Tambah Photo</h1>
    </div>
    
    <div class="col-md-5">
    <form method="POST" action="/dashboard/image" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="wahana" class="form-label">Kategory Wahana</label>
          <select class="form-select" name="wahana_id" id="wahana_id">
            @foreach ($wahana as $item)
                
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>
        
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image[]" multiple required>
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="/dashboard/image" class="btn btn-warning">Kembali</a>
      </form>
    </div>

</div>
    
@endsection
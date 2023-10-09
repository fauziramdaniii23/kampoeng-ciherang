@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="bi bi-image"></i> Photos</h1>
  </div>
  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif

  <div>
    <a href="/dashboard/image/create" class="btn btn-primary mb-2"><i class="bi bi-file-earmark-plus"></i> Tambah Photo</a>
  </div>

  @foreach ($wahana as $item)
  <div class="d-flex justify-content-center align-items-center card mb-4 shadow text-center" style="background-color:#f9fafb">
    <h3>{{ $item->name }}</h3>

      <div class="row">
        @foreach ($item->images as $image)
        <div class="col mb-4">
          <img src="{{ asset('images/' . $image->image) }}"  alt="..." class="img-thumbnail object-fit-cover" style="width: 10rem; height:10rem">
          <form action="/dashboard/image/{{ $image->id }}" method="post">
          @method('delete')
          @csrf 
          <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
        @endforeach
      </div>
  </div>
  @endforeach
</main>
@endsection
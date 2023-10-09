@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="bi bi-back"></i> Wahana</h1>
  </div>

  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif

    <div class="table-responsive">
      <a href="/dashboard/wahana/create" class="btn btn-primary mb-2"><i class="bi bi-file-earmark-plus"></i> Tambah Wahana</a>
    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wahana as $item)
            
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>
            <img src="{{ asset('cover/' . $item->cover) }}" alt="..." style="width: 50px">
          </td>
          <td>
            <a href="/dashboard/wahana/{{ $item->id }}" class="badge bg-info text-decoration-none"><span><i class="bi bi-eye-fill"></i> Detail</span></a>
            <span> | </span>
            <a href="/dashboard/wahana/{{ $item->id }}/edit"  class="badge bg-warning text-decoration-none"><span><i class="bi bi-pencil-square"></i> edit</span></a>
            <span> | </span>
              <button type="button" class="badge bg-danger text-decoration-none border-0" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}"><span><i class="bi bi-trash3-fill"></i> Hapus</span></button>
            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body text-center fs-4">
                    Hapus Wahana?
                    {{ $item->name }}
                  </div>
                  <div class="modal-footer">
                    <form action="/dashboard/wahana/{{ $item->id }}" method="post">
                      @method('delete')
                      @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            </td>
        </tr>
        
        @endforeach

      </tbody>
    </table>
    
  </div>
</main>
@endsection
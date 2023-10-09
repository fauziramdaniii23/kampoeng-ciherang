@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex flex-column">
<div class="text-center pt-2" style="width: 100%">
  <h1>{{ $wahana->name }}</h1>
</div>
<div class="d-flex justify-content-center my-4" style="width: 100%;">
    <img src="{{ asset('cover/' . $wahana->cover) }}" class="img-thumbnail object-fit-cover" style="width: 85%; height:30rem">
  </div>
  <div class="container">
  <p>{{ $wahana->body }}</p>
</div>
<div class="row justify-content-evenly mt-4">
  @foreach ($wahana->images as $item)
      <div class="card shadow-sm mt-2" style="width: 20rem; height:15rem;">
        <img src="{{ asset('images/' . $item->image) }}" style="width: 100%; height:100%">
      </div>
  @endforeach
</div>
<div class="container my-4">
<a href="/dashboard/wahana" class="btn btn-primary">Kembali</a>
</div>
</div>

@endsection
{{-- wahana section --}}
<h2 class="heading text-center">Wahana <span>Ciherang</span></h2>

  <div class="row justify-content-evenly mt-4">
@foreach ($wahana as $item)
    
<div class="card mb-4 shadow" style="width:36rem; background-color:#f9fafb" >
  <img src="{{ asset('cover/' . $item->cover) }}" alt="Responsive image" class="card-img-top img-thumbnail object-fit-cover" style="width: 100%; height:18rem;"  >
  <div class="card-body text-center">
    <h5 class="card-title">{{ $item->name }}</h5>
    <p class="card-text">{{ $item->excerpt }}</p>
    <a href="/wahana/{{ $item->id }}" class="btn btn-primary">Read more...</a>
  </div>
</div>

@endforeach
  </div>


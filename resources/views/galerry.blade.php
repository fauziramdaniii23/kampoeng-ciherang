{{-- Galerry section --}}

<h2 class="heading text-center">Galerry <span>Ciherang</span></h2>

<div class="row justify-content-evenly mt-4">

    @foreach ($image as $item)
    <div class="images card shadow-sm">
    <img src="{{ asset('images/' . $item->image) }}" alt="..." class=" img-thumbnail object-fit-cover" style="width: 100%; height:100%">
    </div>
    @endforeach
    <div class="d-flex justify-content-center mt-4">
        {{ $image->links() }}
    </div>
</div>
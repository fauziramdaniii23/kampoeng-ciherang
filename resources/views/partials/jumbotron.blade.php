{{-- jumbotron --}}

@foreach ($About as $item)  
<div class=""style="background-image: url('/img/{{ $item->image }}'); background-repeat: no-repeat; background-size:cover; background-position:center;  align-items: center; height:30rem">
  <div class="container">
  <h1 class="mb-2" style="padding-top:12rem">Kampoeng <span>Ciherang</span></h1>
  <p class="fst-italic">Sejuk, Indah, dan Menyenangkan</p>
</div>
</div>
@endforeach
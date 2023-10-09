 <!-- about section -->
 
@foreach ($About as $item)
<div class="d-flex justify-content-center mt-4">
  <div class="" style="width:80%">
    <div class=" text-center">
      <h2 class="card-title">Tentang <span>Ciherang</span></h2>
      <p class="card-text pt-4">{{ $item->about }}</p>
    </div>
  </div>
</div>

  <div class="row justify-content-evenly mt-4">
    <div class="col-md-4 card shadow-sm bg-gradient" style=" background-color:#86efac;">
      <div class="row justify-content-evenly text-center py-3">
        <div class="col">
          <h5 class="card-title"><i class="bi bi-ticket-perforated"></i> Tiket Masuk</h5>
          <p class="card-text">Rp.{{ $item->tiket }}</p>
        </div>
        <div class="col">
         <button type="button" class="btn btn-outline-success shadow card-body" data-bs-toggle="modal" data-bs-target="#Modaltiket">
          Beli Tiket
         </button>
        </div>
    </div>
  </div>

     <div class="modal fade" id="Modaltiket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Tiket</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/order" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
              @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
            </div>
          
            <div class="mb-3">
              <label for="date" class="form-label">Tanggal</label>
              <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
              
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
            
            </div>
            <div class="mb-3">
              <label for="qty" class="form-label">Jumlah Tiket</label>
              <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty') }}">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">pesan</button>
          </div>
        </form>
      </div>
      </div>
   </div>

      <div class="col-md-5 card shadow-sm bg-gradient" style=" background-color:#86efac;">
        <div class="row justify-content-evenly text-center py-3">
        <div class="col">
          <h5 class="card-title"><i class="bi bi-calendar-week"></i> Hari Buka</h5>
          <p class="card-text">{{ $item->hari_buka }}</p>
        </div>
        <div class="col">
          <h5 class="card-title"><i class="bi bi-clock"></i> Jam Buka</h5>
          <p class="card-text">{{ $item->jam_buka }}</p>
        </div>
        </div>
      </div>
  </div>
@endforeach

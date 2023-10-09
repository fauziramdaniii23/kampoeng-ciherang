{{-- section Contact --}}
<h2 class="heading text-center pt-4">Contact <span>Us</span></h2>

<div class="row justify-content-evenly mt-4">
   
        @foreach ($About as $item)
        
        <div class="card mb-4" style="width: 36rem">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.509349232666!2d107.79531757444353!3d-6.829363593168545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d9640b7fef01%3A0xb54c7b40079f4502!2sWisata%20Kampoeng%20Ciherang!5e0!3m2!1sid!2sid!4v1690108652249!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
        
    <div class="d-flex flex-column justify-center align-items-md-center" style="width: 36rem">
        
            <div class="form-floating mb-3" style="width: 100%">
                <input type="text" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating" style="width: 100%">
                <input type="enail" class="form-control" placeholder="name@example.com">
                <label for="floatingPassword">Email</label>
              </div>
              <div class="mb-3" style="width: 100%">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" placeholder="Message" rows="3"></textarea>
              </div>
              <button type="button" class="btn btn-primary">Send</button>
        <div class="row mt-5 text-start" style="width:100%">
            <p class="col"><i class="bi bi-whatsapp"></i> No Whatsapp: <br> {{ $item->no_whatsapp }}</p>
            
            <p class="col"><i class="bi bi-envelope-at"></i> email: <br>{{ $item->email }}</p>
        </div>
    </div>
    @endforeach
</div>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <title>Kampoeng Ciherang | Invoice</title>
    {{-- <link rel="stylesheet" href="css/style.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");
    *{
      font-family: "Poppins", sans-serif;
    }
      span{
        color: #86efac;
      }
      .background{
        background-color: #f4f4f5;
      }
      .nav-link:hover {
    color: #86efac !important;
    }
    .images{
      width: 20rem;
      height: 15rem;
    }

    @media(max-width: 768px){
      .images{
        width: 10rem;
        height: 8rem;
      }
    }
    </style>
  </head>
  <body>
    @include('partials.navbar')

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
      <div class="card px-4 py-4 shadow">
          <h5 class="card-title">Kampoeng <span>Ciherang</span></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><i class="bi bi-ticket-perforated"></i>Tiket</h6>
          <p class="card-text">Nama :{{ $order->name }}</p>
          <p class="card-text">Tanggal Kunjungan :{{ $order->date }}</p>
          <p class="card-text">Tanggal Pesan :{{ $order->created_at }}</p>
          <p class="card-text">Alamat :{{ $order->address }}</p>
          <p class="card-text">Jumlah Tiket :{{ $order->qty }}</p>
          <p class="card-text">Total Harga :{{ $order->total_price }}</p>
          <p class="card-text">status :{{ $order->status }}</p>
        </div>
      </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>



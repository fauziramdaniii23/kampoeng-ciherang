@extends('dashboard.layouts.main')

@section('container')
<main class=" col-md-9 ms-sm-auto col-lg-10 ps-2 pe-5">
  <div class="pt-3 pb-2 border-bottom">
    <h1 class="h2"><i class="bi bi-card-text"></i> Tentang Kampoeng Ciherang</h1>
  </div>

  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
    
  @foreach ($about as $item)
  
  <div class="card mt-5 shadow overflow-auto" style="width: 100%; background-color:#f9fafb">
    <div class="card-body">
      <h5 class="card-title"><i class="bi bi-pencil-square"></i> Tentang</h5>
      <p class="card-text">{{ $item->about }}</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tentang">
        Edit
      </button>
    </div>
  </div>

  <div class="modal fade" id="tentang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tentang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/about/{{ $item->id }}" method="POST" >
            @method('put')
            @csrf
            <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
            <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
            <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
            <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
            <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
            <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
            <textarea class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row justify-content-evenly mb-5">

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-ticket-perforated"></i> Tiket Masuk</h5>
        <p class="card-text">{{ $item->tiket }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tiket">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="tiket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tiket Masuk</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" >
              @method('put')
              @csrf
              <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
              <input type="text" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-calendar-week"></i> Hari Buka</h5>
        <p class="card-text">{{ $item->hari_buka }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hari_buka">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="hari_buka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"> Hari Buka</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" >
              @method('put')
              @csrf
              <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
              <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="text" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-clock"></i>  Jam Buka</h5>
        <p class="card-text">{{ $item->jam_buka }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jam_buka">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="jam_buka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Jam Buka</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" >
              @method('put')
              @csrf
              <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
              <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="text" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-image"></i> Sampul</h5>       
        <p class="card-text">{{ $item->image }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sampul">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="sampul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">sampul</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" enctype="multipart/form-data">
              @method('put')
              @csrf
              <input type="file" class="form-control" name="image">
              <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-whatsapp"></i> No Whatsapp</h5>      
        <p class="card-text">{{ $item->no_whatsapp }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#no_whatsapp">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="no_whatsapp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">No Whatsapp</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" >
              @method('put')
              @csrf
              <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
              <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="text" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="hidden" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card mt-5 shadow" style="width: 18rem; background-color:#f9fafb">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-envelope-at"></i> Email</h5>
        <p class="card-text">{{ $item->email }}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#email">
          Edit
        </button>
      </div>
    </div>

    <div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Email</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/about/{{ $item->id }}" method="POST" >
              @method('put')
              @csrf
              <input type="hidden" class="form-control" name="image" value="{{old('image', $item->image)  }}">
              <input type="hidden" class="form-control" name="tiket" value="{{old('tiket', $item->tiket)  }}">
              <input type="hidden" class="form-control" name="hari_buka" value="{{old('hari_buka', $item->hari_buka)  }}">
              <input type="hidden" class="form-control" name="jam_buka" value="{{old('jam_buka', $item->jam_buka)  }}">
              <input type="hidden" class="form-control" name="no_whatsapp" value="{{old('no_whatsapp', $item->no_whatsapp)  }}">
              <input type="text" class="form-control" name="email" value="{{old('email', $item->email)  }}">
              <textarea hidden class="form-control" name="about" value="{{ old('about', $item->about) }}">{{ $item->about }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @endforeach
  </div>
    
    <hr class="border-bottom">
  
</main>
@endsection
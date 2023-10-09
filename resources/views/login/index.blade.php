@extends('layouts.main')

<div class="row justify-content-center">
    <div class="col-md-4">

        <main class="form-signin m-auto" style="padding-top: 5rem">
          <h1 class="h3 mt-3 fw-normal text-center">Please Login</h1>
            <form class="mt-3" action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <button class="btn btn-primary w-100 py-2" type="submit">Login</button> 
              <small class="d-block text-center mt-2">Belum punya akun? <a href="/register">Daftar sekarang</a></small>
            </form>
          </main>
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          
          @if (session('fail'))
          <div class=" alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
    </div>
</div>


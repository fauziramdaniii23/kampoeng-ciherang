@extends('layouts.main')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin m-auto" style="padding-top: 5rem">
            <h1 class="h3 mb-3 fw-normal text-center mt-5">Daftar Akun</h1>
            
            <form action="/register" method="post">
            @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name')
                    is-invalid @enderror" id="name" placeholder="nama" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating pb-4">
                <input type="password" name="password" class="form-control @error('password')
                    is-invalid
                @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Daftar</button> 
            </form>
        
            <small class="d-block text-center mt-2">Sudah punya akun? <a href="/login">Login</a></small>
          </main>
    </div>
</div>


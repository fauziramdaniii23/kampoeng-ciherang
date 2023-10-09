@extends('layouts.main')

  

{{-- @include('partials.navbarr') --}}
    @section('container')

    <section class="" id="home">
      @include('partials.jumbotron')
    </section>
    <!-- about section -->
    <section class="about my-3" id="about">
    @include('about')
    </section>
  
    {{-- wahana section --}}
    <section class="wahana my-3" id="wahana">
      @include('wahana')
    </section>

    {{-- galerry section --}}
    <section class="galerry my-3" id="galerry">
      @include('galerry')
    </section>

    <section class="background mt-3 bg-gradient" id="contact">
      @include('contact')
    </section>
    
    <footer class="d-flex justify-content-around align-items-center" style="background-color: #d4d4d4">
      <div class="pt-4">
        <p>Copyright &copy; 2023 by Fauzi | All Rights Reserved</p>
      </div>
      <div>
        <a href="#"><i class="bi bi-arrow-up-square fs-2"></i></a>
      </div>
    </footer>
    @endsection
 
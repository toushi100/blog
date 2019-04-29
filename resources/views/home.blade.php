@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center">
              <div class="col-md-12 col-sm-12 ftco-animate">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Dashboard</span></p>
                <h1 class="mb-3">Dashboard</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                     @endif
                <p class="breadcrumbs"><span class="mr-2"> You are logged in!</span></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="{{ route('logout') }}" class="search-submit btn btn-primary" style="float:right;"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
              </div>
            </div>
          </div>
        </div>
    </section>

@endsection

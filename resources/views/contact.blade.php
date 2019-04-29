@extends('layouts.app')
    @section('content')
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
              <h1 class="mb-3">Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Contact Information</h2>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Address:</span> 35 شارع الحسين من شارع محى الدين ابو العز - المهندسين
                    Giza</p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Phone:</span> <a href="tel://02 37624538">+ 02 37624538</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Email:</span> <a href="mailto:info@dstegypt.com
                    ">info@dstegypt.com
                    </a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="h4 mb-4">Ask Us Anything</h2>
            {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name'])}}
        </div>
        <div class="form-group">
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Your Email'])}}
        </div>
        <div class="form-group">
            {{Form::number('phone_number', '', ['class' => 'form-control', 'placeholder' => 'Your Phone'])}}
        </div>
        <div class="form-group">
            {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Subject'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your Message'])}}
        </div>
        {{Form::submit('Send Message', ['class'=>'btn btn-primary py-3 px-5'])}}
        {!! Form::close() !!}
            <!-- <form method="POST" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="mobile number">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form> -->
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8802154833243!2d31.197611115114917!3d30.04029418188392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846cc804fec97%3A0xba1e2d99dc873373!2z2LTYsdmD2Kkg2LHZitmEINiz2YjZgdiqINmH2KfZiNizINmB2LHYuSDYp9mE2YXZh9mG2K_Ys9mK2YY!5e0!3m2!1sen!2seg!4v1542409009578" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

@endsection
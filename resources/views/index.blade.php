@extends('layouts.app')
    @section('content')
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Enjoy your Vacation</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
    
    
      <div id="search"  style="margin: 0 auto; width:5%; height:200px; display: block;"></div>
      <div class="ftco-section-search" id="feature">
        <div class="container" >
          <div class="row">
            <div class="col-md-12 tabulation-search">
              <div class="element-animate">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span> Flight</a>
                  <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span> Hotel</a>
                  <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Car Rent</a>
                  <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Cruises</a>
                </div>
              </div>
                
              <div class="tab-content py-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="block-17">
                    <form action="/results" method="get" class="d-block d-lg-flex">
                      <div class="fields d-block d-lg-flex">

                        <div class="textfield-search one-third"><input name="search" type="text" class="form-control" placeholder="Search Location"></div>

                        <div class="check-in one-third"><input type="text" name="check-in" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                        <div class="check-out one-third"><input type="text" name="check-out" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                        <div class="select-wrap one-third">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="guest" id="" class="form-control">
                            <option value="" style="color :black" >Guest</option>
                            <option value="" style="color :black">1</option>
                            <option value="" style="color :black">2</option>
                            <option value="" style="color :black">3</option>
                            <option value="" style="color :black">4+</option>
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Find Flights">  
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="block-17">
                    <form action="" method="post" class="d-block d-lg-flex">
                      <div class="fields d-block d-lg-flex">
                        <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Hotel"></div>

                        <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                        <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                        <div class="select-wrap one-third">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="" style="color :black">Guest</option>
                            <option value="" style="color :black">1</option>
                            <option value="" style="color :black">2</option>
                            <option value="" style="color :black">3</option>
                            <option value="" style="color :black">4+</option>
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Find Hotels">  
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <div class="block-17">
                    <form action="" method="post" class="d-block d-lg-flex">
                      <div class="fields d-block d-lg-flex">
                        <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                        <div class="check-in one-third"><input type="text" id="start_date" class="form-control" placeholder="Start date"></div>

                        <div class="check-out one-third"><input type="text" id="return_date" class="form-control" placeholder="Return date"></div>
                        <div class="select-wrap one-third">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="" style="color :black">Guest</option>
                            <option value="" style="color :black">1</option>
                            <option value="" style="color :black">2</option>
                            <option value="" style="color :black">3</option>
                            <option value="" style="color :black">4+</option>
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Find Car">  
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <div class="block-17">
                    <form action="" method="post" class="d-block d-lg-flex">
                      <div class="fields d-block d-lg-flex">
                        <div class="textfield-search one-third one-third-1"><input type="text" class="form-control" placeholder="Search Location"></div>


                        <div class="check-out one-third one-third-1"><input type="text" id="start_date" class="form-control" placeholder="Check-out date"></div>

                        <div class="select-wrap one-third one-third-1">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="" style="color :black">Categories</option>
                            <option value="" style="color :black">Suite</option>
                            <option value="" style="color :black">Super Deluxe</option>
                            <option value="" style="color :black">Balcony</option>
                            <option value="" style="color :black">Economy</option>
                            <option value="" style="color :black">Luxury</option>
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Find Cruise">  
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Welcome to Bon Voyage since 1898 established Far far away.</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>    
    </div>
   </div>
    <div id="services" class="services"  style="margin: 0 auto; width:5%; height:50px; display: block;"></div>
    <section class="ftco-section bg-light" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-sailboat"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Special Activities</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-around"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Travel Arrangements</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-compass"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Private Guide</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-map-of-roads"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Location Manager</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <div  id="offer" class="offer"  style="margin: 0 auto; width:5%; height:25px; display: block;"></div>
    <section class="ftco-section ">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Our Latest Deals</h2>
          </div>
        </div>
            <div class="row no-gutters">
         @if(count($offer) > 0)
            @foreach($offer as $offers)
              <div class="col-md-6 col-lg-3 ftco-animate">
              <a href="/offers/{{$offers->id}}" class="block-5" style="background-image: url('{{$offers->offer_image}}');">
                  <div class="text">
                    <span class="price">{{$offers->price}}</span>
                    <h3 class="heading">{{$offers->title}}</h3>
                    <div class="post-meta">
                     <!-- //should be changed to something appropiate -->
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            @endforeach
          @else
            <h3 class="heading">We Dont have any Offers at the momment </h3>
                  <div class="post-meta">
                    <span>Please check back later</span>
                  </div>
          @endif
        </div>
      </div>
    </section> 

    <!-- Excursion-->
    <div  id="offer" class="offer"  style="margin: 0 auto; width:5%; height:25px; display: block;"></div>
    <section class="ftco-section ">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Check out Our Excursions</h2>
          </div>
        </div>
            <div class="row no-gutters">
         @if(count($excursion) > 0)
            @foreach($excursion as $excursions)
              <div class="col-md-6 col-lg-3 ftco-animate">
              <a href="/excursions/{{$excursions->id}}" class="block-5" style="background-image: url('{{$excursions->excursion_image}}');">
                  <div class="text">
                    <span class="price">{{$excursions->city}}</span>
                    <h3 class="heading">{{$excursions->name}}</h3>
                    <div class="post-meta">
                     <!-- //should be changed to something appropiate -->
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            @endforeach
          @else
            <h3 class="heading">We Dont have any Offers at the momment </h3>
                  <div class="post-meta">
                    <span>Please check back later</span>
                  </div>
          @endif
        </div>
      </div>
    </section> 

  <!-- loader -->
 



    
 @endsection
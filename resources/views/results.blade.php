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
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                    <div class="col-md-4 sidebar">
                            <div class="sidebar-box ftco-animate"style="background-color : #d6cf01;">
                                      <div class="search-tours p-7" >
                                        <h3>Find your tour</h3>
                                        <form action="" method="post">
                                          <div class="fields">
                                            <div class="row flex-column">
                                              <div class="textfield-search col-sm-12 group mb-3"><input type="text" class="form-control" placeholder="Search Location"></div>
                                              <div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>
                                              <div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                                              <div class="select-wrap col-sm-12 group mb-3">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                  <option value="">Guest</option>
                                                  <option value="">1</option>
                                                  <option value="">2</option>
                                                  <option value="">3</option>
                                                  <option value="">4+</option>
                                                </select>
                                              </div>
                                              <div class="col-sm-12 group mb-3">
                                                <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                                              </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                </div>
                            </div>

                <div class="col-md-8 " >
                    @if(count($hotel) > 0 )
                    @foreach($hotel as $hotels)
                  <div class="container" style="padding-bottom: 10px;">      
                    <div class="row bg-light" >
                               <div class=" col-sm-5 ftco-animate">
                                   <a href="#" class=" block-5" style="background-image: url('{{$hotels->hotel_image}}');height:210px;width:290px;" ></a>
                                   </div>
                               <div class="col-sm-7 ftco-animate">  
                                   <div class="text">
                                       <span class="price">$29/night</span>
                                   <h3 class="heading">{{$hotels->name}}</h3>
                                       <div class="post-meta">
                                           <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                       </div>
                                       <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                                   </div>
                               </div>
                           </div>
                          
                  </div>
                  @endforeach
                  @endif
                       
          
               
          

                    
        <!-- loop starts here-->
        
</div>
     </div>

</section>
@endsection
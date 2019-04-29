<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="/" ><img src="{{ URL::asset('images/logo.png')}}" style="width:100px;height:100px;">Desert Ship travel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
  
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">  
              <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#search" class="nav-link">Features</a></li>
              <li class="nav-item "><a id="nav1" href="#services" class="nav-link " onclick="removehref()">Services</a></li>
              <li class="nav-item remove-attr"><a id="nav1"href="/contact" class="nav-link"onclick="removehref()">Contact</a></li>
              <li class="nav-item remove-attr"><a id="nav1" href="#offer" class="nav-link"onclick="removehref()">Offers</a></li>
              <li class="nav-item remove-attr"><a id="nav1" href="/about" class="nav-link"onclick="removehref()">About</a></li>
              @if (Auth::guest())
              <li class="nav-item remove-attr"><a id="nav1" href="/register" class="nav-link"onclick="removehref()">Signup/Signin</a></li>
                @else
                <li class=" nav-item remove-attr">
                    <a href="/home" class="nav-link" id="nav1">
                        {{ Auth::user()->name }} 
                    </a>
                </li>
              @endif
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
      
    
     

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-yellow">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('/img/logo/logo.png') }}" alt="">Bola Dunia Walet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto">
            @if(Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="#carouselExampleIndicators">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            @else
              <li class="nav-item">
                <a href="/backoffice" class="nav-link">Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            @endif
          </ul>
        </div>
    </div>
</nav>
@extends('layouts.app')
@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{ asset('img/Product/banyak2-min.jpg') }}');">
                <div class="carousel-caption d-none d-md-block hero-caption">
                <h3>Agar - Agar Powder Products</h3>
                <p>Our assortment of products</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/Pudding/brown-slide.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block hero-caption">
                <h3>Biscuit Pudding</h3>
                <p>Made with "Cap Bola Dunia" Agar Powder</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/Powder/powderslide-min.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block hero-caption">
                <h3>Our Agar Powder</h3>
                <p>Made from High Quality Selected Seaweed</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('img/Pudding/bright-slide.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block hero-caption">
                <h3>Flower Art Pudding</h3>
                <p>Express Your Creativity with Double Swallow Sun Agar Powder</p>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    
    <section class="py-5 bg-image-full" id="about">
      <div class="container">
        <h1 class="section-title">about us</h1>
        <hr>
        <p>PT. Bola Dunia Walet is one of the leading company producing Agar Powder in Indonesia’s food industry. Established in 1993, our initial purpose has always been to expand and improve the Agar-Agar industry in Indonesia.</p>
        <p>Our Company’s Agar-agar is derived from seaweed which were cultivated from various fertile sea-farms in Indonesia. Infamous for its good source of Calcium, Iron, and Fibre, our products may be used to enjoy drinks, confectionaries, desserts, and other daily products such as rice.</p>
        <p>With over 25 years of experience, we have a vision of being a notable company in the industry, with missions to provide the best quality products and services, and ensure excellent satisfaction of the market. Our company aims to contribute to the vast economic growth both in the Indonesian and international market by providing employment opportunities and utilising Indonesian resources while progressively promoting the development of ‘Green Economy’.</p>
      </div>
    </section>
    <section class="py-5" id="products">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="section-title-inv">products</h1>
            <hr>
          </div>
          @include('modals.productdetails')
          @foreach ($products as $product)
            <div class="col-sm-4 grow">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" data-name="{{$product->name}}" data-id="{{$product->id}}" v-on:click="showModal($event)">
                <img class="product-img" src="{{asset('img/Product/'.$product->images_id.'-min.jpg')}}" alt="Card image cap">
                <div class="overlay">
                  <div class="hover-caption">
                    Product 1
                  </div>
                </div>
              </a>
            </div>
          @endforeach
          
        </div>
      </div>
    </section>
    <section class="py-5" id="contact">
      <div class="container">
        <h1 class="section-title-inv">contact us</h1>
        <center>
          <p>We aim to grow into a better company since 1993 to offer the best products for the market. For business inquiries or other inquiries, please fill out the form below</p>
          <p style="display:none;">adm@boladuniawalet.com<p/>
        </center>
        <div> <!-- buat display none disini -->
          <form action="/contact" method="POST">
            <table class="table">
              <tr>
                <th>
                  <label>Email</label>
                </th>
                <td>
                  <input type="email" name="email" class="form-control">
                </td>
              </tr>
              <tr>
                <th>
                  <label>Message</label>
                </th>
                <td>
                  <textarea class="form-control" name="message"></textarea>
                </td>
              </tr>
              <tr>
                <th>
                  <label>Phone Number</label>
                </th>
                <td>
                  <input type="text" name="phone" class="form-control">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" class="form-control btn btn-primary">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">If there are any questions or inquiries please reach us through phone or email below</p>
        <p class="m-0 text-center text-white">+6221 633 5550 | adm@boladuniawalet.com</p>
        <p class="m-0 text-center text-white">Copyright &copy; boladuniawalet.com 2018 | Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></p>
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>
@endsection
@section('scripts')
    <script>
      var products = {!! $products !!};
      $(document).ready(function(){
        // Add smooth scrolling to all links
        $(".nav-link").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
        
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      });

      //change color on scroll
      $(window).scroll(function(){
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
      });
      //interval between auto change slide
      $('.carousel').carousel({
        interval: 2200
      })
      
    </script>
@endsection
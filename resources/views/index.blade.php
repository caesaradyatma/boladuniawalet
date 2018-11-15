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
            <div class="carousel-item active" style="background-image: url('{{ asset('img/Product/banyak2.jpg') }}');">
                <div class="carousel-caption d-none d-md-block">
                <h3>First Slide</h3>
                <p>This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/Pudding/slide2.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/Powder/powderslide.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('img/Pudding/slide4.jpg' )}}');">
                <div class="carousel-caption d-none d-md-block">
                <h3>Fourth Slide</h3>
                <p>This is a description for the fourth slide.</p>
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
    <section class="py-5" id="about">
      <div class="container">
        <h1 class="section-title">about us</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </section>
    <section class="py-5" id="products">
      <div class="container">
        <!-- modal  -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h3 id="modal-title"></h3>
              </div>
              <div class="modal-body">
                <img src="img/Product/product1.jpg" alt="" class="img-fluid modal-img">
                <p id="product-desc">
                  
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal -->
        <div class="row">
          <div class="col-sm-12">
            <h1 class="section-title-inv">products</h1>
            <hr>
          </div>
          <!-- <div class="col-sm-3"></div> -->
          <div class="col-sm-4 grow">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" data-whatever="Product 1">
              <img class="product-img" src="img/Product/product1.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 1
                </div>
              </div>
            </a>
          </div>
          <!-- <div class="col-sm-3"></div> -->
          <div class="col-sm-4 grow">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" data-whatever="Product 2">
              <img class="product-img" src="img/Product/product2.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 2
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 grow">
            <a href="#">
              <img class="product-img" src="img/Product/product3.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 3
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 grow"> 
            <a href="#">
              <img class="product-img grow" src="img/Product/product4.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 4
                </div>
              </div>
            </a>
          </div>
          <!-- <div class="col-sm-2"></div> -->
          <div class="col-sm-4 grow"> 
            <a href="#">
              <img class="product-img grow" src="img/Product/product5.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 5
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 grow">
            <a href="#">
              <img class="product-img" src="img/Product/product6.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="hover-caption">
                  Product 6
                </div>
              </div>
            </a>
          </div>
          <!-- <div class="col-sm-2"></div> -->
        </div>
      </div>
    </section>
    <section class="py-5" id="contact">
      <div class="container">
        <h1 class="section-title-inv">Contact Us</h1>
        <p>admin@boladuniawalet.com</p>
        <form>
          <table class="table">
            <tr>
              <th>
                <label>Email</label>
              </th>
              <td>
                <input type="email" class="form-control">
              </td>
            </tr>
            <tr>
              <th>
                <label>Message</label>
              </th>
              <td>
                <textarea></textarea class="form-control">
              </td>
            </tr>
            <tr>
              <th>
                <label>Phone Number</label>
              </th>
              <td>
                <input type="text" class="form-control">
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
    </section>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; boladuniawalet.co.id 2018</p>
      </div>
      <!-- /.container -->
    </footer>
@endsection
@section('scripts')
    <script>
      $('.bd-example-modal-lg').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var descproduct1 = "lalalalyeyeyeye"
          var descproduct2 = "wuouowuwouwouwo"
          var modal = $(this)
          modal.find('#modal-title').text(recipient)

          if(recipient == "Product 1") {
            modal.find('#product-desc').html('<center>'+descproduct1+'</center>')
            console.log('wew')
          }
          else if (recipient == "Product 2") {
            modal.find('#product-desc').html('<center>' + descproduct2 + '</center>')
            console.log('wiu') 
          }
          
        })
      //change color on scroll
      $(window).scroll(function(){
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
      });
      //interval between auto change slide
      $('.carousel').carousel({
        interval: 2200
      })
      // Select all links with hashes
      $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    </script>
@endsection
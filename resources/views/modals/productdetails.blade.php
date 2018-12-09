<!-- modal  -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h3 id="modal-title">@{{ product_name }}</h3>
              </div>
              <div class="modal-body">
                <div id="carousel-modal" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img id="sideimg1" class="d-block w-100 modal-item" v-bind:src="product_image1" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img id="sidesimg2" class="d-block w-100 modal-item" v-bind:src="product_image2" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img id="sidesimg3" class="d-block w-100 modal-item" v-bind:src="product_image3" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel-modal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-modal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <p id="product-desc">
                  @{{ product_desc }}
                </p>
              </div>
            </div>
          </div>
        </div>
<!-- end modal -->
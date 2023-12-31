<?php
require_once('includes/header.php');
?>
<div style="background-color: grey;">


  <div class="container" style="min-height: calc(100vh - 100px);">
    <section class="py-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <!-- TODO make number of items in cart dynamic and update depending on stored customer session -->
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Flowering</h6>
                        <h6 class="text-black mb-0">Anthurium</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
<!-- TODO Reference database for cart items that include number of items and item names -->
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- TODO check for dynamic pricing in database - are there are discounts, sales, qty discounts -->
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 44.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                          <!-- TODO update alt text -->
                      </div>
                      <!-- TODO Reference database for cart items that include number of items and item names -->
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Succulents & Cacti</h6>
                        <h6 class="text-black mb-0">Echeveria</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                       <!-- TODO check for dynamic pricing in database - are there are discounts, sales, qty discounts -->
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 44.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Climbing & Vining</h6>
                        <h6 class="text-black mb-0">Pothos - Marble Queen</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
<!-- TODO Reference database for cart items that include number of items and item names -->
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                       <!-- TODO check for dynamic pricing in database - are there are discounts, sales, qty discounts -->
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 44.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="products.php" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back
                          to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
<!-- TODO Cart pricing should be dynamic and relfect whats in cart database as well as cart qty -->
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items 3</h5>
                      <h5>$ 132.00</h5>
                    </div>

                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <!-- TODO have shipping options update price that is displayed -->
                      <select class="select">
                        <option value="1">Standard-Delivery- $5.00</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <h5 class="text-uppercase mb-3">Give code</h5>
                    <!-- TODO use database to check for stored coupon codes, throwing error if nothing matches and adjusting cart pricing if it does -->

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Enter your code</label>
                      </div>
                    </div>

                    <hr class="my-4">
<!-- TODO total price should be dynamic -->
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>$ 137.00</h5>
                    </div>

                    <button type="button" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark">Confirm Order</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</section>
</div>


<?php
require_once('includes/footer.php');
?>
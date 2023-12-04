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

                    </div>

                    <?php
                    $total = 0;
                    $total_quantity = 0;
                    if (isset($_SESSION['cart_item'])) {
                      $cart_item = $_SESSION['cart_item'];
                      $cart_quantity = $_SESSION['cart_quantity'];
                      for ($i = 0; $i < count($cart_item); $i++) {
                        $name = $cart_item[$i];
                        $quantity = $cart_quantity[$i];
                        $sql = "SELECT * FROM inventory WHERE name='$name'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = $result->fetch_assoc()) {
                          $total += $row['price'] * $quantity;
                          $total_quantity += $quantity;
                          ?> <!-- START -->
                          <hr class="my-4">
                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img src="" class="img-fluid rounded-3">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">
                                <?php echo $row['category']; ?>
                              </h6>
                              <h6 class="text-black mb-0">
                                <?php echo $row['name']; ?>
                              </h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                              </button>
                              <!-- TODO Reference database for cart items that include number of items and item names -->
                              <input id="form1" min="0" name="quantity" value="<?php echo $quantity; ?>" type="number"
                                class="form-control form-control-sm" />

                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <!-- TODO check for dynamic pricing in database - are there are discounts, sales, qty discounts -->
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">
                                <?php echo $row['price'] * $quantity; ?>
                              </h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                          </div>
                          <!-- END -->
                          <?php

                        }
                      }
                    } else {
                      ?>
                      <hr class="my-4">
                      <h6 class="text-black mb-0">
                        Your cart is empty.
                      </h6>
                      <?php
                    }

                    ?>
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
                      <h5 class="text-uppercase">items
                        <?php echo $total_quantity; ?>
                      </h5>
                      <h5>$
                        <?php echo $total; ?>
                      </h5>
                    </div>

                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <!-- TODO have shipping options update price that is displayed -->
                      <select class="select">
                        <option value="1">Standard-Delivery- $5.00</option>
                      </select>
                    </div>
                    <hr class="my-4">
                    <!-- TODO total price should be dynamic -->
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>$
                        <?php echo $total + 5; ?>
                      </h5>
                    </div>
                    <form action="index.php" method="post">
                      <button type="submit" name="confirm_order" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Confirm Order</button>
                    </form>

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
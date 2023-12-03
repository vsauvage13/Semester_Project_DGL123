<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <?php
    require_once('includes/header.php');
    // Test Environment
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/

    // Production Environment
    error_reporting(0);
    ini_set("display_errors", 0);
    ?>
    <!-- Hero Banner-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Bring Nature Indoors</h1>
                <p class="lead fw-normal text-white-50 mb-0">Choose from succulents to flowering tropicals and
                    everything in between!</p>
            </div>
        </div>
    </header>


    <!-- Round Circle Image Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="col mb-5">
                        <div class="h-100">
                            <!-- Product image-->
                            <img class="card-img-top rounded-circle" src="images/Echeveria.jpg"
                                style="width: 245px; height: 160px; object-fit: cover;" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Succulents & Cacti</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- TODO add link to product page with php filter here -->
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="products.php">View More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="h-100">

                        <!-- Product image-->
                        <img class="card-img-top rounded-circle" style="width: 245px; height: 160px; object-fit: cover;"
                            src="images/Pothos.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Climbing & Vining</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <!-- TODO add link to product page with php filter here -->
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="h-100">
                        <!-- Product image-->
                        <img class="card-img-top rounded-circle" style="width: 245px; height: 160px; object-fit: cover;"
                            src="images/Anthurium.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Flowering</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <!-- TODO add link to product page with php filter here -->
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="h-100">
                        <!-- Product image-->
                        <img class="card-img-top rounded-circle" style="width: 245px; height: 160px; object-fit: cover;"
                            src="images/Monstera Thai Constellation.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Collectors Plants</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <!-- TODO add link to product page with php filter here -->
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TODO figuere out file path issues - directory thing -->
                <!-- <div class="container">
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> -->



                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <h2 class="text-center pb-3" style="width: 18rem;">Shop By Care:</h2>
                                    <div class="card text-center" style="width: 18rem;">

                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 1</h5>
                                            <?php

                                            // Dump the Variables for debugging
                                            $debugVar1 = "Debug Value 1";
                                            $debugVar2 = rand(1, 100); // Random integer between 1 and 100
                                            var_dump($debugVar1, $debugVar2);

                                            ?>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Easy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 2</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Moderate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 3</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Advanced</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <h2 class="text-center pb-3" style="width: 18rem;">Shop By Size:</h2>
                                    <div class="card text-center" style="width: 18rem;">

                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 1</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Small</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 2</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Medium</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 3</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Large</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <h2 class="text-center pb-3" style="width: 18rem;">Shop By Light:</h2>
                                    <div class="card text-center" style="width: 18rem;">

                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 1</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop Low
                                                Light</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 2</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop
                                                Indirect Light</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <!-- TODO replace Card title with placeholder icon perhaps? or images? -->
                                            <h5 class="card-title">Card 3</h5>
                                            <!-- TODO add link to product page with php filter here -->
                                            <a href="#" class="btn btn-outline-dark mt-auto stretched-link">Shop Direct
                                                Light</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>
    <?php
    require_once('includes/footer.php');
    ?>
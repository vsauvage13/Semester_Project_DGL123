<?php
require_once('includes/header.php');
?>


<!--Main Navigation-->
<section>


    <!-- sidebar + content -->
    <section class="">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-3">
                    <!-- Toggle button -->
                    <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button"
                        data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span>Show filter</span>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" >
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" 
                                        aria-expanded="true" >
                                        Plant Types
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="text-dark">Succulents</a></li>
                                            <li><a href="#" class="text-dark">Cacti</a></li>
                                            <li><a href="#" class="text-dark">Climbing</a></li>
                                            <li><a href="#" class="text-dark">Vining</a></li>
                                            <li><a href="#" class="text-dark">Flowering</a></li>
                                            <li><a href="#" class="text-dark">Collectors</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" >
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" 
                                        aria-expanded="true" >
                                        Brands
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo">
                                    <div class="accordion-body">
                                        <div>
                                            <!-- TODO Items need to be replaced with plant ones on home page -->
                                            <!-- TODO dropdown needs to be fixed -->
                                            <!-- Checked checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    checked />
                                                <label class="form-check-label" for="flexCheckChecked1">Mercedes</label>
                                                <span class="badge badge-secondary float-end">120</span>
                                            </div>
                                            <!-- Checked checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                     checked />
                                                <label class="form-check-label" >Toyota</label>
                                                <span class="badge badge-secondary float-end">15</span>
                                            </div>
                                            <!-- Checked checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                  checked />
                                                <label class="form-check-label"
                                                    >Mitsubishi</label>
                                                <span class="badge badge-secondary float-end">35</span>
                                            </div>
                                            <!-- Checked checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                   checked />
                                                <label class="form-check-label" >Nissan</label>
                                                <span class="badge badge-secondary float-end">89</span>
                                            </div>
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                   />
                                                <label class="form-check-label" >Honda</label>
                                                <span class="badge badge-secondary float-end">30</span>
                                            </div>
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    />
                                                <label class="form-check-label">Suzuki</label>
                                                <span class="badge badge-secondary float-end">30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" >
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" 
                                        aria-expanded="false" >
                                        Price
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show"
                                    >
                                    <div class="accordion-body">
                                        <div class="range">
                                            <input type="range" class="form-range"  />
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <p class="mb-0">
                                                    Min
                                                </p>
                                                <div class="form-outline">
                                                    <input type="number" class="form-control" />
                                                    <label class="form-label">$0</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">
                                                    Max
                                                </p>
                                                <div class="form-outline">
                                                    <input type="number" class="form-control" />
                                                    <label class="form-label" >$1,0000</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="btn btn-white w-100 border border-secondary">apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" 
                                        aria-expanded="false" >
                                        Size
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show"
                                   >
                                    <div class="accordion-body">
                                        <input type="checkbox" class="btn-check border justify-content-center"
                                            id="btn-check1" checked autocomplete="off" />
                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;"
                                            for="btn-check1">XS</label>
                                        <input type="checkbox" class="btn-check border justify-content-center"
                                            id="btn-check2" checked autocomplete="off" />
                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;"
                                            for="btn-check2">SM</label>
                                        <input type="checkbox" class="btn-check border justify-content-center"
                                            id="btn-check3" checked autocomplete="off" />
                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;"
                                            for="btn-check3">LG</label>
                                        <input type="checkbox" class="btn-check border justify-content-center"
                                            id="btn-check4" checked autocomplete="off" />
                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;"
                                            for="btn-check4">XXL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" >
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" 
                                        aria-expanded="false" >
                                        Ratings
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show"
                                  >
                                    <div class="accordion-body">
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                checked />
                                            <label class="form-check-label" >
                                                <i class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </label>
                                        </div>
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                              checked />
                                            <label class="form-check-label" >
                                                <i class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </label>
                                        </div>
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                 checked />
                                            <label class="form-check-label" >
                                                <i class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </label>
                                        </div>
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                               checked />
                                            <label class="form-check-label" >
                                                <i class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-secondary"></i><i
                                                    class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <!-- content -->
                <div class="col-lg-9">
                    <section class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">32 Items found</strong>
                        <div class="ms-auto">
                            <select class="form-select d-inline-block w-auto border pt-1">
                                <option value="0">Best match</option>
                                <option value="1">Recommended</option>
                                <option value="2">High rated</option>
                                <option value="3">Randomly</option>
                            </select>
                            <div class="btn-group shadow-0 border">
                                <a href="#" class="btn btn-light" title="List view">
                                    <i class="fa fa-bars fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-light active" title="Grid view">
                                    <i class="fa fa-th fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </section>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <h5 class="mb-1 me-1">$34.50</h5>
                                        <span class="text-danger"><s>$49.99</s></span>
                                    </div>
                                    <p class="card-text">Anthurium - Red & White Stripe</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">$29.99</h5>
                                    <p class="card-text">Echeveria - Fancy Variety</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">$19.99</h5>
                                    <p class="card-text">Pothos - Marble Queen</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <!-- Pagination -->
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar + content -->






    <?php
    require_once('includes/footer.php');
    ?>
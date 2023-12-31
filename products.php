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
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" aria-expanded="true">
                                        Plant Types
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li><a href="products.php" class="text-dark">All</a></li>
                                            <li><a href="?category=succulent" class="text-dark">Succulents</a></li>
                                            <li><a href="?category=cacti" class="text-dark">Cacti</a></li>
                                            <li><a href="?category=climbing" class="text-dark">Climbing</a></li>
                                            <li><a href="?category=tall" class="text-dark">Tall</a></li>
                                            <li><a href="?category=flowering" class="text-dark">Flowering</a></li>
                                            <li><a href="?category=collectors" class="text-dark">Collectors</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-mdb-toggle="collapse" aria-expanded="false">
                                        Price
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div class="range">
                                            <input type="range" class="form-range" />
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
                                                    <label class="form-label">$1,0000</label>
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
                                        data-mdb-toggle="collapse" aria-expanded="false">
                                        Size
                                    </button>
                                </h2>

                                <div class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li><a href="products.php" class="text-dark">All</a></li>
                                            <li><a href="?size=2inches" class="text-dark">2"</a></li>
                                            <li><a href="?size=4inches" class="text-dark">4"</a></li>
                                            <li><a href="?size=6inches" class="text-dark">6"</a></li>
                                            <li><a href="?size=1G" class="text-dark">1G</a></li>
                                        </ul>
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
                        <?php
                        $sql = "SELECT COUNT(id) FROM inventory WHERE 1";
                        if (isset($_GET['category'])) {
                            $category = mysqli_real_escape_string($conn, $_GET['category']);
                            $sql .= " AND category = '$category'";
                        }
                        if (isset($_GET['size'])) {
                            $size = mysqli_real_escape_string($conn, $_GET['size']);
                            $sql .= " AND size = '$size'";
                        }
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            $row = mysqli_fetch_row($result);
                            $count = $row[0];
                        } else {
                            $count = 0;
                        }
                        ?>

                        <strong class="d-block py-2">
                            <?php echo $count; ?> Items found
                        </strong>


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
                        <?php
                        $sql = "SELECT * FROM inventory";

                        if (isset($_GET['category'])) {
                            $category = $_GET['category'];
                            $sql .= " WHERE category='$category'";
                        }

                        $result = mysqli_query($conn, $sql);
                        foreach ($result as $row) {
                            $name = $row["name"];
                            $price = $row["price"]; ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">
                                    <img src="images/<?php echo $name ?>.jpg"
                                        style="width: 245px; height: 160px; object-fit: cover;" class="card-img-top" />
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$
                                                <?php echo $price; ?>
                                            </h5>
                                        </div>
                                        <p class="card-text">
                                            <?php echo $name; ?>
                                        </p>
                                        <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                            <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

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
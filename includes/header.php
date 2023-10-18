<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Plant Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="products.php">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <!-- TODO Link the below pages to a filter on the products page - implement PHP here -->
                        <li><a class="dropdown-item" href="products.php">Popular Items</a></li>
                        <li><a class="dropdown-item" href="products.php">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <!-- TODO make this search bar - search a library using php? -->
            <!-- TODO have search function bring up suggestions? -->
            <form class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </div>
            </form>
            <ul class="navbar-nav ms-auto"> <!-- Move Login link to the right -->
                <li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>
            </ul>
            <button class="btn btn-outline-dark" type="submit" formaction="cart.php">
                <i class="bi-cart-fill me-1"></i>
                <a class="nav-link" href="cart.php">Cart</a>
                <!-- TODO Below make the number update to the cart number using PHP -->
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </button>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VtuberDesu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="asset/img/logo1.jpg" alt=""
                    style="height: 83px;width: 100%;max-width: 80px;opacity: 50%;border-radius: 50%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allproduct.html">ALL PRODUCT</a>
                    </li>
                </ul>
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn " style="background-color: #00A9FF;color: white;border-radius: 20rem;"
                        type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-3" style="background-color: #89CFF3;padding:1rem;border-radius: 1.5rem;">
                        <a class="nav-link" href="cart.html">Cart</a>
                    </li>
                    <li class="nav-item"
                        style="background-color: #00A9FF;padding:1rem;border-radius: 1.5rem; color: white;">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-12 col-md-3 mb-4" style="border-color: black;border: solid black 2px;">
                <h1 style="color: #89CFF3; font-size: 36px;" class="font-weight-bold pt-4">Find Merch</h1>
                <input type="checkbox" id="New" name="New" value="baru">
                <label for="New"> New</label><br>
                <input type="checkbox" id="Real life" name="Real life" value="Real life">
                <label for="Real life"> Real life</label><br>
                <input type="checkbox" id="Digital" name="Digital" value="Digital">
                <label for="Digital"> Digital</label><br>
            </div>

            <!-- All Product -->
            <div class="col-12 col-md-9">
                <h1 class="mb-4" style="font-size: 48px;">All Product</h1>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <a href="perproduct.html" style="text-decoration: none;">
                            <div class="card" style="width: 18rem;">
                                <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                    <p class="card-text">Rp1.200.000</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <a href="perproduct.html" style="text-decoration: none;">
                            <div class="card" style="width: 18rem;">
                                <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                    <p class="card-text">Rp1.200.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <a href="perproduct.html" style="text-decoration: none;">
                            <div class="card" style="width: 18rem;">
                                <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                    <p class="card-text">Rp1.200.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <a href="perproduct.html" style="text-decoration: none;">
                            <div class="card" style="width: 18rem;">
                                <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                    <p class="card-text">Rp1.200.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class=" text-light pt-5 pb-4 text-dark " style="background-color: #CDF5FD;margin-top: 10%;">
        <div class="container  text-md-left">
            <div class="row  text-md-left">
                <div class="col-md-8 col-lg-2 col-xl-2 mx-auto mt-3">
                    <div class="col-md-2">
                        <img src="asset/img/logo.jpg" alt="">
                    </div>
                    <h1>Contact</h1>
                    <p>Email:@jahgsdfgadjhsg@gmail.com</p>
                    <p>No telephone :0182927387387</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 pt-5">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Useful links</h5>
                    <p>
                        <a href="index.html" class="text-dark" style="text-decoration: none;">Beranda</a>
                    </p>
                    <p>
                        <a href="menu.html" class="text-dark" style="text-decoration: none;">All Product</a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3 pt-5 ">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Account</h5>
                    <p>
                        <a href="index.html" class="text-dark" style="text-decoration: none;">Sign In</a>
                    </p>
                    <p>
                        <a href="menu.html" class="text-dark" style="text-decoration: none;">View Cart</a>
                    </p>
                </div>

            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p> Copyright @2024 All right reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="">PPLG-1 2023/2024 </strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/warungdalamnegeri?igsh=ZWVpNDk2OGZxaHp4"
                                class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                    class="fab fa-instagram"></i></a>
                        </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
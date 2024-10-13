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


<!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="asset/img/logo1.jpg" alt=""
                style="height: 83px;width: 100%;opacity: 50%;border-radius: 50%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"
                        style="max-width:max-content;">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allproduct.php">ALL PRODUCT</a>
                </li>
            </ul>
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn " style="background-color: #00A9FF;color: white;border-radius: 20rem;"
                    type="submit">Search</button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item me-3" style="background-color: #89CFF3;padding:1rem;border-radius: 1.5rem;">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item"
                    style="background-color: #00A9FF;padding:1rem;border-radius: 1.5rem; color: white;">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>


<!--Detail Product-->
<div class="container-fluid mt-3 ">
    <div class="container">
        <div class="row d-flex justify-content-beetween">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img src="asset/img/PerProduct.png" alt="">
                        <div class="mt-4">
                            <div class="scroll-container d-flex overflow-auto">
                                <img src="asset/img/Image2.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 1">
                                <img src="asset/img/Image2.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 2">
                                <img src="asset/img/Image2.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 3">
                                <img src="asset/img/Image.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 4">
                                <img src="asset/img/Image.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 5">
                                <img src="asset/img/Image.jpg" class="img-thumbnail m-1" style="width: 100px;"
                                    alt="Image 6">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1>holoID Jiwa Karya Special Merchandise Part2</h1>
                        <h3>CATEGORY</h3>
                        <div class="col-md-12">
                            <ul class="list-unstyled d-flex flex-wrap">
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 1
                                    </button>
                                </li>
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 2
                                    </button>
                                </li>
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 3
                                    </button>
                                </li>
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 4
                                    </button>
                                </li>
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 5
                                    </button>
                                </li>
                                <li class="m-2">
                                    <button class="btn btn-sm"
                                        style="background-color:#89CFF3; border-radius: 15px; width: 150px;">
                                        Register 6
                                    </button>
                                </li>
                            </ul>


                            <div class="container mt-5">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <!-- Label for Quantity -->
                                        <h3 class="">Quantity</h3>

                                        <div class="d-flex align-items-center justify-content">
                                            <!-- Button Minus -->
                                            <button id="btn-minus" class="btn btn-sm"
                                                style="background-color:#e5e5e5; border-radius:0 0 10 10; width: 40px; height: 40px; font-size: 20px; border-right: none;">-</button>

                                            <!-- Number Box -->
                                            <input id="number-display" type="text" class="form-control text-center"
                                                value="1" readonly
                                                style="width: 60px; font-size: 20px; border-radius: 0; border-left: none; border-right: none;">

                                            <!-- Button Plus -->
                                            <button id="btn-plus" class="btn btn-sm"
                                                style="background-color:#e5e5e5; border-radius: 0 0 10 10; width: 40px; height: 40px; font-size: 20px; border-left: none;">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-5">Price:Rp.1.500.000</h4>
                        <div class="col-md-12">
                            <button class="btn btn-succes form-control mt-5 justify-content-center d-flex" type="submit"
                                style="background-color:#52C936 ;border-radius: 25px;color: white;">Proceed to
                                Purchase</button>
                        </div>
                        <p class=" mt-5 overflow-auto" style="size: 14px;font-weight: 300;">
                            Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem
                            IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsumv
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--recomendation-->
<div class="kategori-pilihan mt-5">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-12 mt-3">
                <h1 style=" color:#00A9FF ;font-size: 48px; font-weight: bold;text-align: center;">Recomendation</h1>
                <div id="carouselExampleControls" class="carousel carousel2 slide" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-inner2">
                        <div class="carousel-item active">
                            <div class="row mx-0 p-0 mt-3">
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text " style="padding-top: 15px;"> Rp1.600.000</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-md 4">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row mx-0 p-0 mt-3">
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row mx-0 p-0 mt-3">
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text " style="padding-top: 15px;"> Rp1.600.000</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div
                                        class="d-flex p-2 flex-column align-item-center justify-content-center card-category">
                                        <div class="card" style="width: 18rem;">
                                            <img src="asset/img/Image2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">crimzon ruze birthday celebration 2024</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk
                                                    of
                                                    the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
    <script>
        let count = 1;

        // Get elements
        const btnMinus = document.getElementById('btn-minus');
        const btnPlus = document.getElementById('btn-plus');
        const numberDisplay = document.getElementById('number-display');

        // Function to update display
        function updateDisplay() {
            numberDisplay.value = count;
        }

        // Minus button event listener
        btnMinus.addEventListener('click', function () {
            if (count > 1) { // Optional: to prevent negative numbers
                count--;
                updateDisplay();
            }
        });

        // Plus button event listener
        btnPlus.addEventListener('click', function () {
            count++;
            updateDisplay();
        });
    </script>

</html>
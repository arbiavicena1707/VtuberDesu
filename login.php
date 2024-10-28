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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="asset/img/logo1.jpg" alt=""
                    style="height: 83px;width: 100%;opacity: 50%;border-radius: 50%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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


    <div class="row" style="height: 100vh; margin: 0;">
        <!-- Kolom Gambar -->
        <div class="col-7" style="padding-right: 0;">
            <img src="asset/img/login.jpg" alt="login image" style="width: 100%; height: 100vh; object-fit: cover;">
        </div>

        <!-- Kolom Form -->
        <div class="col-5 d-flex justify-content-center align-items-center" style="background-color: #006599;">
            <div class="Login-box shadow p-4" style="width: 85%; background-color: #006599; border-radius: 10px;">
                <form action="" method="post">
                    <div class="col-md-12">
                        <h1 style=" color: antiquewhite; text-align: center;">Login</h1>
                    </div>
                    <div class="col-md-12 mt-3 d-flex justify-content-center">
                        <input type="text" value="" placeholder="Username" class="form-control login-form " name="Username"
                            style="background-color: transparent; border: 1px solid #ffffff; color: white; border-radius: 10px; font-size: 0.9rem; padding: 0.5rem; width: 70%; height: 50%;">
                    </div>
                    <div class="col-md-12 mt-3 d-flex justify-content-center">
                        <input type="password" placeholder="Password" class="form-control login-form" name="Password"
                            style="background-color: transparent; border: 1px solid #ffffff; color: white; border-radius: 10px; font-size: 0.9rem; padding: 0.5rem; width: 70%;height: 50%;">
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-between align-items-center mt-3">
                            <div class="col-md-6 text-start">
                                <input type="checkbox" id="New" name="New" value="baru">
                                <label for="New" style="color: white;">Ingat saya</label>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="" style="text-decoration: none; color: white;">Lupa password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn form-control mt-5" type="submit"
                            style="background-color: #89CFF3; border-radius: 25px;">Login</button>
                    </div>
                    <div class="col-md-12 mt-4 text-center">
                        <p style="color: white; font-weight: 300;">Belum memiliki akun? <a href="register.php"
                                style="text-decoration: none; color: white; font-weight: 600;">Daftar
                                disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>







</body>

</html>
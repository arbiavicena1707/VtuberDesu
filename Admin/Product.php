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
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4">Tambah Produk</h3>
                <form action="" enctype="multipart/form-data" method="post" class="p-4 border rounded">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="Name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="Description" id="description" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" name="Price" id="price" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" name="Stock" id="stock" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select id="category_id" name="category_id" class="form-control" required>
                            <option value="0">Pilih Category</option>
                            <option value="1">Real life</option>
                            <option value="2">Digital</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" name="Image" id="image" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" value="Confirm" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['Name'];
        $Description = $_POST['Description'];
        $Price = $_POST['Price'];
        $Stock = $_POST['Stock'];
        $Image = $_FILES['Image']['name'];
    ?>
        <div class="mt-5 p-4 border rounded bg-light">
            <h4>Detail Produk:</h4>
            <p>Nama: <?= $Name ?></p>
            <p>Deskripsi: <?= $Description ?></p>
            <p>Harga: <?= $Price ?></p>
            <p>Stok: <?= $Stock ?></p>
            <p>Gambar: <?= $Image ?></p>
        </div>
    <?php
    } else {
    ?>
        <p class="mt-4 text-center text-danger">Belum memasukkan Data</p>
    <?php
    }
    ?>

</body>

</html>
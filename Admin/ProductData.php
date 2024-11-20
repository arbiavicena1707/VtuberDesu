<?php
require_once "../Config/Config.php";

if (isset($_POST['BtnInput'])) {
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Stock = $_POST['Stock'];
    $Category = $_POST['Category'];
    $Image = basename($_FILES['Image']['name']);

?>
    <div>
        <h4>Detail Produk:</h4>
        <p>Nama: <?= $Name ?></p>
        <p>Deskripsi: <?= $Description ?></p>
        <p>Harga: <?= $Price ?></p>
        <p>Stok: <?= $Stock ?></p>
        <?php
        $Category_List = ["Category", "Real Life", "Digital"];
        ?>
        <p>Category: <?= $Category_List[$Category] ?></p>
        <p>Gambar: <?= $Image ?></p>
    </div>
<?php

    $Data = [
        'Name' => $Name,
        'Description' => $Description,
        'Price' => $Price,
        'Stock' => $Stock,
        'Category' => $Category,
        'Image' => $Image,
    ];

    $validasi = validasiData($Data);

    if ($validasi == 0) {
        echo "data sudah lengkap siap di inputkan";
        $result = InputProduct($Data, $Koneksi);
        $folderTujuan = $rootDir . "uploads";
        if ($result) {
            $upload = tambahGambar($folderTujuan, $_FILES['Image']);
            if ($upload)
                header("location:Product.php?status=1");
            else
                header("location:Product.php?errno=1");
        } else header("location:Product.php?errno=1");
    } else {
        echo "data $validasi kurang";
    }

} else if (isset($_GET["Del"])) {
    $Id = $_GET['Del'] ?? null;
    var_dump($Id);
    if ($Id === null || !ctype_alnum(text: $Id)) {
        header("location:View_Product.php?errno=3");
        
    } else {
        $Result = DeleteProduct($Koneksi, $Id);
        if ($Result)
            header("location:View_Product.php?success=1");
        else
            header("location:View_Product.php?errno=5");
    }
}




?>
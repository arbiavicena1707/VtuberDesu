<?php
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Stock = $_POST['Stock'];
    $Category = $_POST['Category'];
    $Image = $_FILES['Image']['name'];
?>
    <div class="mt-5 p-4 border rounded bg-light">
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
} else {
?>
    <p class="mt-4 text-center text-danger">Belum memasukkan Data</p>
<?php
}

$Data = [
    'Name'=>$Name,
    'Description'=>$Description,
    'Price'=>$Price,
    'Stock'=>$Stock,
    'Category'=>$Category,  
    

]
?>

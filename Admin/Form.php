<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin VtuberDesu</title>
</head>

<body>
    <form action="Data.php" enctype="multipart/form-data" method="post">
        <!-- Inputikan Nama  -->
        Nama: <input type="text" name="Nama" value=""><br>
        
        <!-- Inputkan NISN -->
        NISN: <input type="number" name="NISN"><br>
        
        <!-- Inputkan NIS -->
        NIS: <input type="text" name="NIS"><br>
        
        Pilih Jurusan Anda:
        <select name="Jurusan" id="">
            <option value="0">Pilih Jurusan</option>
            <option value="1">PPLG</option>
            <option value="2">TJKT</option>
            <option value="3">DKV</option>
        </select><br>
        
        Tanggal lahir: <input type="date" name="Tanggal_Lahir"><br>
        
        Alamat:<textarea name="Alamat"></textarea><br>
        
        No telepon: <input type="number" name="Telepon" id=""><br>
        
        Gender:
        <input type="radio" name="Gender" value="Laki-Laki" id="Laki-Laki">
        <label for="Laki-Laki">Laki-Laki</label>
        <input type="radio" name="Gender" value="Perempuan" id="Perempuan">
        <label for="Perempuan">Perempuan</label><br>
        
        Hobi:<br>
        <input type="checkbox" name="Hobi[]" value="Tidur" id="Tidur">
        <label for="Tidur">Tidur</label><br>
        <input type="checkbox" name="Hobi[]" value="Main Game" id="MainGame">
        <label for="MainGame">Main Game</label><br>
        <input type="checkbox" name="Hobi[]" value="Liat Film" id="LiatFilm">
        <label for="LiatFilm">Liat Film</label><br>
        <input type="checkbox" name="Hobi[]" value="Anime" id="Anime">
        <label for="Anime">Anime</label><br>
        
        Foto: <input type="file" name="Foto" id=""><br>
        
        <input type="submit" value="Kirim File">
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Output</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama = $_POST['Nama'];
        $nisn = $_POST['NISN'];
        $nis = $_POST['NIS'];
        $jurusan = $_POST['Jurusan'];
        $tanggal_lahir = $_POST['Tanggal_Lahir'];
        $alamat = $_POST['Alamat'];
        $telepon = $_POST['Telepon'];
        $gender = $_POST['Gender'];
        $hobi = isset($_POST['Hobi']) ? $_POST['Hobi'] : [];
        $foto = $_FILES['Foto'];

        // Menampilkan data yang diambil dari form
        echo "Data yang Dikirim:";
        echo "<p>Nama: $nama</p>";
        echo "<p>NISN: $nisn</p>";
        echo "<p>NIS: $nis</p>";

        // Menentukan jurusan berdasarkan value yang dikirim
        $jurusan_list = ["Pilih Jurusan", "PPLG", "TJKT", "DKV"];
        echo "<p>Jurusan: " . $jurusan_list[$jurusan] . "</p>";

        echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>No Telepon: $telepon</p>";
        echo "<p>Gender: $gender</p>";

        echo "<p>Hobi: ";
        echo !empty($hobi) ? implode(", ", $hobi) : "Tidak ada hobi yang dipilih";
        echo "</p>";

        // Menampilkan informasi file yang diunggah
        if ($foto['error'] == 0) {
            $file_name = $foto['name'];
            $file_tmp = $foto['tmp_name'];
            $file_size = $foto['size'];
            $file_type = $foto['type'];
            
            echo "<p>Foto: $file_name</p>";
            echo "<p>Tipe File: $file_type</p>";
            echo "<p>Ukuran File: " . ($file_size / 1024) . " KB</p>";
            
            // Pindahkan file ke folder 'uploads'
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "<p>File berhasil diunggah ke folder uploads/ dengan nama $file_name.</p>";
        } else {
            echo "<p>Foto: Tidak ada file yang diung    gah</p>";
        }
    } else {
        echo "<p>Form belum diisi.</p>";
    }
    ?>
</body>
</html>

<?php require 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenama = $_POST['jenama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $pautan = $_POST['pautan'];
    $markah = $_POST['markah'];

    // Check if a new image is uploaded
    if (!empty($_FILES['gambar']['name'])) {
        $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        $newnamepic = date('Ymd_His') . "." . $ext;
        $uploadPath = "gambar/" . $newnamepic;
        $isUploaded = move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath);
        if (!$isUploaded) {
            echo "<script>alert('Gambar tidak dapat dimuat naik'); window.location='produk_edit.php?id=$id'</script>";
            exit();
        }
        $gambar = $newnamepic;
    } else {
        // If no new image is uploaded, keep the existing image data from the database
        $dataProduk = mysqli_query($connect, "SELECT * FROM produk WHERE idproduk='$id'");
        $qProduk = mysqli_fetch_array($dataProduk);
        $gambar = $qProduk['gambar'];
    }

    // Update the record with the new data, including the updated image filename
    $result2 = mysqli_query($connect, "UPDATE produk SET namaProduk='$nama', idjenama='$jenama', harga='$harga', deskripsi='$deskripsi', gambar='$gambar', pautanpembelian='$pautan', markahpenilaian='$markah' WHERE idproduk='$id'");

    echo "<script> alert('Kemaskini Produk BERJAYA');window.location='produk.php'</script>";
} else {
    echo "<script> window.location='produk.php'</script>";
}
?>

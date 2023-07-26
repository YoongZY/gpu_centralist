<?php require 'connect.php'; // Include the connection to the database

if (isset($_POST['submit'])) {
    // Retrieve data from the form submission
    $nama = $_POST['nama'];
    $jenama = $_POST['jenama'];
    $harga = $_POST['harga'];

    // Combine the detailed specifications into a formatted description
    $det1 = $_POST['det1'];
    $det2 = $_POST['det2'];
    $det3 = $_POST['det3'];
    $det4 = $_POST['det4'];
    $det5 = $_POST['det5'];
    $det6 = $_POST['det6'];
    $det7 = $_POST['det7'];
    $deskripsi = "Bus Interface: " . $det1 . " <br> " .
                "Core Clock(s): " . $det2 . " MHz <br> " .
                "Memory Size: " . $det3 . " GB <br> " .
                "Memory Type: " . $det4 . " <br> " .
                "DirectX: " . $det5 . " <br> " .
                "OpenGL: " . $det6 . " <br> " .
                "Release Date: " . $det7;

    $pautan = $_POST['pautan'];
    $markah = $_POST['markah'];

    // Upload the image file and generate a new filename based on the current date and time
    $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
    $newnamepic = date('Ymd_His') . "." . $ext;
    $uploadPath = "gambar/" . $newnamepic;
    $isUploaded = move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath);

    // If the image upload fails, display an alert and redirect back to the previous page
    if (!$isUploaded) {
        echo "<script>alert('Gambar tidak dapat dimuat naik'); window.location='produk_edit.php?id=$id'</script>";
        exit();
    }

    // Insert the new product record into the 'produk' table
    $baharu = "INSERT INTO produk VALUES (NULL,'$nama','$jenama','$harga','$deskripsi','$newnamepic','$pautan','$markah')";
    $barangan = mysqli_query($connect, $baharu);

    // Check if the product insertion is successful and display appropriate alert messages
    if ($barangan){
        echo "<script> alert('Tambahan Produk BERJAYA');window.location='produk.php'</script>";
    } else {
        echo "<script> alert('Tambahan Produk GAGAL');window.location='produk.php'</script>";
    }
}
?>

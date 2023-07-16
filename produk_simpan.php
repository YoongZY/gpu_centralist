<?php require 'connect.php';   
    # receive nilai di POST
    if(isset($_POST['submit'])) {
        $gambar = $_FILES['gambar']['name'];
        $ext = substr(strrchr($_FILES['gambar']['name'],"."), 1);
        $newnamepic = md5(rand()*time()). "$ext";
        $uploadPath = "gambar/".$newnamepic;
        $isUploaded = move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath);

        $nama = $_POST['nama'];
        $jenama = $_POST['jenama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $pautan = $_POST['pautan'];
        $markah = $_POST['markah'];

        // record input into database
        $baharu = "INSERT INTO produk VALUES (NULL,'$nama','$jenama','$harga','$deskripsi','$newnamepic','$pautan','$markah')";

        $barangan = mysqli_query($connect, $baharu);
        if ($barangan){
            echo "<script> alert('Tambahan Produk Berjaya');window.location='produk.php'</script>";
        }else{
            echo "<script> alert('Tambahan Produk Gagal');window.location='produk.php'</script>";
        }
    }
?>
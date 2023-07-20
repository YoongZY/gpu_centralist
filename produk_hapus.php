<?php include 'connect.php'; 
    $idpic = $_GET['pic'];
    $iddel = $_GET['id'];

    //delete picture
    unlink("gambar/".$idpic);
    mysqli_query($connect,"DELETE FROM produk WHERE idproduk='$iddel'");

    echo "<script> alert('Penghapusan Produk BERJAYA');window.location='produk.php'</script>";
?>
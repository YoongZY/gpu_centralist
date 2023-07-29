<?php 
include 'connect.php'; // Include the connection to the database

$idpic = $_GET['pic']; // Get the 'pic' value from the URL parameter
$iddel = $_GET['id']; // Get the 'id' value from the URL parameter

// Delete the picture associated with the product
unlink("gambar/".$idpic);

// Delete the product from the 'produk' table in the database using the provided 'id'.
mysqli_query($connect, "DELETE FROM produk WHERE idproduk='$iddel'");

// Display an alert message indicating successful deletion and then redirect the user back to the 'produk.php' page.
echo "<script> alert('Penghapusan Produk BERJAYA');window.location='produk.php'</script>";
?>

<?php include 'header.php'; // Include the header file which contains the common heading code

$idproduk = $_GET['idproduk']; // Get the 'idproduk' value from the URL parameter

// Fetch product details from the database using JOIN to get the product details along with the corresponding brand details
$dataProduk = mysqli_query($connect, "SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 ON t1.idjenama = t2.idjenama WHERE t1.idproduk = '$idproduk'");
$qProduk = mysqli_fetch_array($dataProduk); // Fetch the product details as an associative array
?>
<html>
<script src="print_util.js"></script> <!-- Include the print_util.js script for printing utility -->

<div id="menu">
    <?php include "menu2.php"; ?> <!-- Include the menu2.php file to display the menu -->
</div>

<div id="isi">
    <body>
        <center><h2> Deskripsi Produk </h2></center> <!-- Heading to display the product description -->
        <img class="gambar2" src="gambar/<?php echo $qProduk['gambar']; ?>"> <!-- Display the product image using the 'gambar' value from the fetched product details -->
        <font color="darkblue"><h2><?php echo $qProduk['namaProduk']; ?></h2></font> <!-- Display the product name using the 'namaProduk' value from the fetched product details -->
        <p class="jenama"><b><?php echo $qProduk['namaJenama']; ?></b></p> <!-- Display the product brand using the 'namaJenama' value from the fetched product details -->
        <p style="color:crimson" class="price"><b>Markah G3D: </b><?php echo $qProduk['markahpenilaian']; ?></p> <!-- Display the product rating using the 'markahpenilaian' value from the fetched product details -->
        <p class="price"><?php echo $qProduk['deskripsi']; ?></p> <!-- Display the product description using the 'deskripsi' value from the fetched product details -->
        <p class="price"><b>RM <?php echo $qProduk['harga']; ?></b></p> <!-- Display the product price using the 'harga' value from the fetched product details -->
        <br>
        <p class="price">Pautan Pembelian : <a href="<?php echo $qProduk['pautanpembelian']; ?>"><?php echo $qProduk['pautanpembelian']; ?></a></p> <!-- Display the purchase link for the product using the 'pautanpembelian' value from the fetched product details -->
        <p>
            <button onclick="printDiv('isi')"> CETAK </button> <!-- Button to print the product details -->
            <button onclick="history.back()"> BALIK </button> <!-- Button to go back to the previous page -->
        </p>
    </body>
</div>
</html>

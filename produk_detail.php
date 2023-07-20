<?php include 'header.php'; 
    $idproduk = $_GET['idproduk'];

    $dataProduk = mysqli_query($connect,"SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 ON t1.idjenama = t2.idjenama WHERE t1.idproduk = '$idproduk'");
    $qProduk = mysqli_fetch_array($dataProduk);
?>
<html>
<script src="print_util.js"></script>
<div id="menu">
    <?php include "menu2.php"; ?>
</div>
<div id="isi">
    <body>
        <center><h2> Deskripsi Produk </h2></center>
        <img src="gambar/<?php echo $qProduk['gambar']; ?>" width="40%" height="auto">
        <h2><?php echo $qProduk['namaProduk']; ?></h2>
        <p class="jenama"><b><?php echo $qProduk['namaJenama']; ?></b></p>
        <p class="price"><b>Markah G3D: </b><?php echo $qProduk['markahpenilaian']; ?></p>
        <p class="price"><?php echo $qProduk['deskripsi']; ?></p>
        <p class="price"><b>RM <?php echo $qProduk['harga']; ?></b></p>
        <br>
        <p class="price">Pautan Pembelian : <a href="https://<?php $qProduk['pautanpembelian']; ?>"><?php echo $qProduk['pautanpembelian']; ?></a></p>
        <p>
            <button onclick="printDiv('isi')"> CETAK </button>
            <button onclick="history.back()"> BALIK </button>
        </p>
    </body>
</div>
</html>
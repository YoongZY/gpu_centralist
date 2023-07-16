<?php include 'header.php'; 
    $jumpa = $_POST['carian'];
    if($jumpa==NULL) {
        echo "<script> alert('Sila taipkan nama produk'); window.location='dashboard.php'</script>";
    }
?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <head>
        <h2 style="text-align: center"> Hasil Carian Nama Produk </h2>
    </head>
    <body>
        <?php
            $query_jenama = "SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 ON t1.idjenama=t2.idjenama WHERE t1.namaProduk LIKE '%$jumpa%' ORDER BY t1.namaProduk ASC";
            $papar_query_jenama = mysqli_query($connect,$query_jenama);
            if (mysqli_num_rows($papar_query_jenama)>0) {
                foreach($papar_query_jenama as $senarai_jenama) {
        ?>
                    <div class="card">
                        <div class="gambar">
                            <img src="gambar/<?php echo $senarai_jenama['gambar']; ?>" width="auto" height="120px">
                        </div>
                        <h3><?php echo $senarai_jenama['namaProduk']; ?></h3>
                        <p class="price">RM <?php echo $senarai_jenama['harga']; ?></p>

                        <!-- simpan ke table pilihan -->
                        <p>
                            <form method="POST" action="pilihan_simpan.php">
                                <input type="text" name="idproduk" value="<?php echo $senarai_jenama['idproduk']; ?>" hidden>
                                <input type="text" name="idaccount" value="<?php echo $_SESSION['nama']; ?>" hidden>
                                <button name="submit" type="submit"> PILIH </button>
                            </form>
                        </p>
                    </div>
            <?php
                }
            }else{
                echo "Maaf, tiada yang sepadan";
            }
            ?>
    </body>
</div>
</html>
<?php include 'header.php'; 
    $idproduk = $_GET['id'];    #get url
    #sambung ke table
    $dataProduk = mysqli_query($connect,"SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 ON t1.idjenama=t2.idjenama WHERE t1.idproduk='$idproduk'");
    $qProduk = mysqli_fetch_array($dataProduk);
?>
<html>
<div id="menu"> <!-- call menu -->
    <?php include 'menu2.php'; ?>
</div>

<div id="isi">
    <head>
        <h2 style="text-align: center"> Edit Produk </h2>
    </head>
    <body>
        <form method="POST" action="produk_kemaskini.php" enctype="multipart/form-data">
            <!-- input maklumat -->
            <p>Nama Produk <br>
                <input type="text" name="nama" value="<?php echo $qProduk['namaProduk']; ?>" size="50" required autofocus>
            </p>

            <p>Jenama <br>
            <select name="jenama">
                <?php
                    echo "<option selected value='$qProduk[idjenama]'> $qProduk[namaJenama]</option>";
                    $jenama = mysqli_query($connect,"SELECT * FROM jenama");
                    while ($pilihan = mysqli_fetch_array($jenama)) {
                        echo "<option value='$pilihan=[idjenama]'> $pilihan[namaJenama]</option>";
                    }
                ?>
            </select>
            </p>

            <p>Harga <br>
            RM <input type="text" name="harga" value="<?php echo $qProduk['harga']; ?>" size="46" required>
            </p>

            <p>Deskripsi Produk <br>
            <textarea name="deskripsi" rows="10" cols="50" required><?php echo $qProduk['deskripsi'] ?></textarea>
            </p>

            <p>Gambar Produk <br>
            <img src="gambar/<?php echo $qProduk['gambar']; ?>" width="30%" height="auto"><br>
            <?php $default = $qProduk['gambar'];
            if( $default == ""){
                $default = $qProduk['gambar'];
            } ?>
            Tukar Gambar: <input type="file" name="gambar" accept=".jpg,.jpeg,.png" value="$default";>
            </p>

            <p>Pautan Pembelian Produk <br>
            <textarea name="pautan" rows="2" cols="50" required><?php echo $qProduk['pautanpembelian']; ?>
            </textarea>
            </p>

            <p>Markah Penilaian Produk <br>
            <input type="text" name="markah" value=<?php echo $qProduk['markahpenilaian']; ?> maxlength="3" size="45" required> /100
            </p>

            <input type="text" name="id" value="<?php echo $qProduk['idproduk']; ?>" hidden>
            <br>

            <button name="submit" type="submit"> SIMPAN </button></form>
            <button onclick="history.back()"> BALIK </button>
            <br>
            <font color='red'> * Pastikan Maklumat Dimasukkan Betul </font>
        <!--</form>-->
    </body>
</div>
</html>
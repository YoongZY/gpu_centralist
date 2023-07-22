<?php include 'header.php'; ?>
<html>
<meta charset="UTF-8">
<script src="print_util.js"></script>
<!-- call menu -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>

<!-- table isi -->
<div id="isi">
    <body>
        <?php if ($_SESSION['level']!="PENGGUNA"){ ?>   <!-- admin produk list -->
            <center><h2> Senarai Produk Semasa </h2></center>
            
            <!--Papar maklumat-->
            <table class="table">
            <tr id="row1">
                <td>Kedudukan</td>
                <td>Nama Produk</td>
                <td>Jenama</td>
                <td>Harga</td>
                <td>Deskripsi</td>
                <td>Gambar</td>
                <td id="shrinktd">Pautan</td>
                <td>Markah G3D</td>
                <td>Tindakan</td>
            </tr>

            <?php $no=1;
            $data1=mysqli_query($connect,"SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 on t1.idjenama=t2.idjenama ORDER BY t1.markahpenilaian DESC");
            while ($info1=mysqli_fetch_array($data1)) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $info1['namaProduk']; ?></td>
                <td><?php echo $info1['namaJenama']; ?></td>
                <td>RM <?php echo $info1['harga']; ?></td>
                <td><?php echo $info1['deskripsi']; ?></td>
                <td><img class="gambar" src="gambar/<?php echo $info1['gambar']; ?>"></td>
                <td id="shrinktd"><?php echo $info1['pautanpembelian']; ?></td>
                <td><?php echo $info1['markahpenilaian']; ?></td>
                <td><!-- papar icon link -->
                    <a href="produk_edit.php? id=<?php echo $info1['idproduk']; ?>"> &#128393 </a>
                    <a href="produk_hapus.php? id=<?php echo $info1['idproduk']; ?> $pic=<?php echo $info1['gambar']; ?>" onclick="return confirm('Anda Pasti?')"> &#10060 </a>
                </td>
            </tr>
            <?php $no++; } ?>

            <tr id="row1">
                <td colspan="9"><center>
                    <br>
                    <font style = "font-size:12px">~~~~~ Senarai Tamat ~~~~~<br />
                        Jumlah Produk : <?php echo $no-1; ?>
                    </font>
                    <p><button onclick="printDiv('isi')"> CETAK </button></p>
                </center></td>
            </tr>
            </table>

            
        <?php }else{ ?>   <!-- pengguna produk list -->
            <center><h2> Senarai Produk Semasa </h2></center>
            
            <!--Papar maklumat-->
            <table class="table">
            <tr id="row1">
                <td>Kedudukan</td>
                <td>Nama Produk</td>
                <td>Jenama</td>
                <td>Harga</td>
                <td>Gambar</td>
                <td>Markah G3D</td>
                <td></td>
            </tr>

            <?php $no=1;
            $data1=mysqli_query($connect,"SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 on t1.idjenama=t2.idjenama ORDER BY t1.markahpenilaian DESC");
            foreach ($data1 as $info1){  ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $info1['namaProduk']; ?></td>
                <td><?php echo $info1['namaJenama']; ?></td>
                <td>RM <?php echo $info1['harga']; ?></td>
                <td><img class="gambar" src="gambar/<?php echo $info1['gambar'] ?>"></td>
                <td><?php echo $info1['markahpenilaian']; ?></td>
                <td>
                    <p>
                        <form method="POST" action="pilihan_simpan.php">
                            <input type="text" name="idproduk" value="<?php echo $info1['idproduk']; ?>" hidden>
                            <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                            <button name="submit" type="submit"> PILIH </button>
                        </form>
                    </p>
                </td>
            </tr>
            <?php $no++; } ?>

            <tr id="row1">
                <td colspan="7"><center>
                    <br>
                    <font style = "font-size:12px">~~~~~ Senarai Tamat ~~~~~<br />
                        Jumlah Produk : <?php echo $no-1; ?>
                    </font>
                    <p><button onclick="printDiv('isi')"> CETAK </button></p>
                </center></td>
            </tr>
            </table>
        <?php } ?>
    </body>
</div>
</html>
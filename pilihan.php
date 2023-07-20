<?php include 'header.php'; ?>
<html>
<script src="print_util.js"></script>
<div id="menu"> <!-- call menu -->
    <?php include 'menu2.php'; ?>
</div>

<div id="isi">
    <body>
        <center>
            <h2> Statistik Pilihan Pengguna </h2>
        </center>
        <table class="table">
            <tr id="row1">
                <td>BIL</td>
                <td>NAMA PRODUK</td>
                <td>JENAMA</td>
                <td>HARGA</td>
                <td>GAMBAR</td>
                <td>BILANGAN</td>
            </tr>
            <?php
            $no=1;
            $data1 = mysqli_query($connect, "SELECT t2.namaProduk, COUNT(t1.idaccount) AS kira, t3.namaJenama, t2.harga, t2.gambar FROM rekod_pilihan AS t1 INNER JOIN produk AS t2 INNER JOIN jenama AS t3 ON t1.idproduk=t2.idproduk AND t3.idjenama=t2.idjenama GROUP BY t1.idproduk ORDER BY COUNT(t1.idaccount) DESC");
            while ($info1 = mysqli_fetch_array($data1)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $info1['namaProduk']; ?></td>
                    <td><?php echo $info1['namaJenama']; ?></td>
                    <td>RM <?php echo $info1['harga']; ?></td>
                    <td width="200px"><img src="gambar/<?php echo $info1['gambar']; ?>" width="auto" height="120px"></td>
                    <td><?php echo $info1['kira']; ?></td>
                </tr>
            <?php $no++;
            }
            ?>
            <tr>
                <td colspan="6"><center>
                    <font style='font-size:12px'>~~~~~Senarai Tamat~~~~~<br>
                        Jumlah Pilihan : <?php echo $no-1; ?>
                    </font>
                    <p><button onclick="printDiv('isi')"> CETAK </button></p>
                </center></td>
            </tr>
        </table>
    </body>
</div>
</html>
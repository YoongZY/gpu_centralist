<?php include 'header.php'; ?>
<html>
<meta charset="UTF-8">
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <body>
        <center>
            <h2> Senarai Jenama </h2>
        </center>
        <table class="table">
            <!-- papar jenama -->
            <tr id="row1">
                <td>Bil</td>
                <td>Nama Jenama</td>
                <td>Tindakan
                    <a href="import.php" style="float:right;"> 📥 </a>
                </td>
            </tr>
            <?php #panggil rekod
            $no=1;
            $data1=mysqli_query($connect, "SELECT * FROM jenama ORDER BY namaJenama ASC");
            while($info1=mysqli_fetch_array($data1)){   ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $info1['namaJenama']; ?></td>
                    <td><!--papar pautan-->
                        <a href="jenama_edit.php?id=<?php echo $info1["idjenama"];?>"> &#128393 </a>
                        <a href="jenama_hapus.php?id=<?php echo $info1["idjenama"];?>" onclick="return confirm('Anda Pasti?')"> &#10060 </a>
                    </td>
                </tr>
                <?php $no++; 
            } ?>
        </table>
    </body>
</div>
</html>
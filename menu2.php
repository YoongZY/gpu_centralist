<html>
<?php session_start();
if ($_SESSION['level']=="PENGGUNA"){
?>
    <h3> Menu [<?php echo $_SESSION['nama']; ?>]</h3> <!--pengguna login -->
    <h4><ul>
        <li><a href="dashboard.php">🏠Home</a></li><br>
        <li><a href="produk.php">📃Senarai Produk</a></li>
        <li><?php include 'jenama_menu.php'; ?></li>
        <li><?php include 'produk_cari.php'; ?></li><br>
        <li><a href="logout.php">🚪Log Keluar</a></li>
    </ul></h4>
<?php }else{ ?>
    <h3> Menu Admin </h3>   <!-- admin login -->
    <h4><ul>
        <li><a href="dashboard.php">🏠Home</a></li><br>
        <li><a href="produk.php">📃Senarai Produk</a></li>
        <li><a href="produk_tambah.php">➕Tambah Produk</a></li>
        <li><a href="jenama.php">📃Senarai Jenama</a></li>
        <li><a href="jenama_tambah.php">➕Tambah Jenama</a></li><br>
        <li><a href="pilihan.php">📋Pilihan Pengguna</a></li><br>
        <li><a href="logout.php">🚪Log Keluar</a></li>
    </ul></h4>
<?php } ?>

<!-- for 1 jenama only -->
<script>
    function onlyOne2(checkbox) {
        var checkboxes = document.getElementsByName("brand")
        checkbox.forEach((item)=> {
            if (item !== checkbox) item.checked = false
        })
    }
</script>
</html>
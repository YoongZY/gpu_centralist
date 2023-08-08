<html>
<?php session_start(); // Start the session to handle user authentication ?>
<font color=black>
    <?php if ($_SESSION['level'] == "PENGGUNA") { // PENGGUNA menu ?>
        <h3> Menu [<?php echo $_SESSION['nama']; ?>]</h3> <!-- Display the username of the logged-in user -->
        <h4><ul>
            <li><a href="dashboard.php">🏠Home</a></li><br>
            <li><a href="produk.php">📃Senarai Produk</a></li>
            <li><?php include 'jenama_menu.php'; ?></li> <!-- Include the content of jenama_menu.php, which is used to filter products by brand -->
            <li><?php include 'produk_cari.php'; ?></li> <!-- Include the content of produk_cari.php, which is used to search for products -->
            <br>
            <li><a href="setting.php">⚙️Setting Akaun</a></li> <!-- Link to user account settings page -->
            <li><a href="logout.php">🚪Log Keluar</a></li> <!-- Link to logout page to log out the user -->
        </ul></h4>
    <?php } else { // ADMIN menu ?>
        <h3> Menu [<?php echo $_SESSION['nama']; ?>] </h3>   <!-- Display the username of the logged-in admin -->
        <h4><ul>
            <li><a href="dashboard.php">🏠Home</a></li><br>
            <li><a href="produk.php">📃Senarai Produk</a></li>
            <li><a href="produk_tambah.php">➕Tambah Produk</a></li> <!-- Link to add new product page -->
            <li><a href="jenama.php">📃Senarai Jenama</a></li>
            <li><a href="jenama_tambah.php">➕Tambah Jenama</a></li> <!-- Link to add new brand page -->
            <br>
            <li><a href="pilihan.php">📋Pilihan Pengguna</a></li><br> <!-- Link to user selections page -->
            <li><a href="setting.php">⚙️Setting Akaun</a></li> <!-- Link to admin account settings page -->
            <li><a href="logout.php">🚪Log Keluar</a></li> <!-- Link to logout page to log out the admin -->
        </ul></h4>
    <?php } ?>
</font>
<!-- JavaScript function to ensure only one checkbox is selected at a time -->
<script>
    function onlyOne2(checkbox) {
        var checkboxes = document.getElementsByName("brand")
        checkbox.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>
</html>

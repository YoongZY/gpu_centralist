<?php
include 'header.php';

if (isset($_POST['brands'])) {
    $selectedBrandsString = $_POST['brands'];
    $selectedBrands = explode(',', $selectedBrandsString);
} else {
    // Handle the case when no brands are selected
    $selectedBrands = [];
}

if (isset($_POST['pilih'])) {
    if (empty($_POST['harga1']) || empty($_POST['harga2'])) {
        echo "<script>alert('Taip julat harga'); window.location='dashboard.php'</script>";
    } else {
        $pilih1 = $_POST['harga1'];
        $pilih2 = $_POST['harga2'];

        // Build the SQL query
        $query_produk = "SELECT * FROM jenama AS t1 INNER JOIN produk AS t2 ON t1.idjenama = t2.idjenama";
        
        if (!empty($selectedBrands)) {
            $selectedBrandsString = implode(',', $selectedBrands);
            $query_produk .= " WHERE t1.idjenama IN ($selectedBrandsString)";
        }
        
        $query_produk .= " AND t2.harga BETWEEN $pilih1 AND $pilih2 ORDER BY t2.harga ASC";

        $papar_query = mysqli_query($connect, $query_produk);
        
        if (mysqli_num_rows($papar_query) > 0) {
            ?>
            <html>
            <div id="menu">
                <?php include 'menu2.php'; ?>
            </div>
            <div id="isi">
                <head>
                    <h2 style="text-align:center"> Senarai Produk Mengikut Pilihan Harga & Jenama </h2>
                </head>
                <body>
                <?php
                include 'harga_menu.php';

                echo "<hr>";
                echo '<div class="card-container">'; // Container for the card divs

                while ($senarai_produk = mysqli_fetch_assoc($papar_query)) {
                    $isChecked = in_array($senarai_produk['idjenama'], $selectedBrands) ? 'checked' : ''; // Check if the current brand is selected
                    ?>
                    <!-- papar produk -->
                    <div class="card">
                        <div class="gambar">
                            <img src="gambar/<?php echo $senarai_produk['gambar']; ?>" width="auto" height="120">
                        </div>
                        <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
                        <p class="price">Jenama : <?php echo $senarai_produk['namaJenama']; ?></p>
                        <p class="price">RM <?php echo $senarai_produk['harga']; ?></p>
                        <!-- simpan ke table pilihan -->
                        <p>
                            <form method="POST" action="pilihan_simpan.php">
                                <input type="text" name="idproduk" value="<?php echo $senarai_produk['idproduk']; ?>" hidden>
                                <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                                <button name="submit"> PILIH </button></a>
                            </form>
                        </p>
                    </div>
                    <?php
                }

                echo '</div>';  // Close the card-container div
                ?>
                </body>
            </div>
            </html>
            <?php
        } else { ?>
            <html>
            <div id="menu">
                <?php include 'menu2.php'; ?>
            </div>
            <div id="isi">
                <head>
                    <h2 style="text-align:center"> Senarai Produk Mengikut Pilihan Harga & Jenama </h2>
                </head>
                <?php echo "Tiada produk jenama ini terdapat dalam julat harga yang dimasukki";
        }
    }
}
?>

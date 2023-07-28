<?php include 'header.php'; // Include the "header.php" file to add common header content

// Check if any brands are selected from the previous page (harga_menu.php)
if (empty($_POST['brands'])) {
    // Handle the case when no brands are selected
    $selectedBrands = [];
} else {
    $selectedBrandsString = $_POST['brands'];
    $selectedBrands = explode(',', $selectedBrandsString);
}

if (isset($_POST['pilih'])) { // Check if the "SEARCH" button is clicked
    if (!is_numeric($_POST['harga1'])) {
        // If the price input is not an integer, show an alert and redirect back to dashboard.php
        echo "<script> alert('Harga tidak boleh mengandungi abjad'); window.location='dashboard.php'</script>";

    } elseif (($_POST['harga1'])=="0") {
        // If the price input = 0, show an alert and redirect back to dashboard.php
        echo "<script> alert('Harga tidak boleh = 0'); window.location='dashboard.php'</script>";

    } elseif (empty($_POST['harga1']) || empty($_POST['harga2'])) {
        // If the price range is not provided, show an alert and redirect back to dashboard.php
        echo "<script> alert('Sila masukkan julat harga'); window.location='dashboard.php'</script>";

    } else {
        $pilih1 = $_POST['harga1'];
        $pilih2 = $_POST['harga2'];

        // Build the SQL query to retrieve products that match the selected brands and fall within the specified price range
        $query_produk = "SELECT * FROM jenama AS t1 INNER JOIN produk AS t2 ON t1.idjenama = t2.idjenama";
        
        if (!empty($selectedBrands)) {
            $query_produk .= " WHERE t1.idjenama IN ($selectedBrandsString)";
        }
        
        $query_produk .= " AND t2.harga BETWEEN $pilih1 AND $pilih2 ORDER BY t2.harga ASC";

        // Execute the SQL query to get the product results
        $papar_query = mysqli_query($connect, $query_produk);

        if (mysqli_num_rows($papar_query) > 0) { // Check if there are products that match the criteria
            ?>
            <!-- Display the products in a card layout -->
            <html>
            <div id="menu">
                <?php include 'menu2.php'; ?>
            </div>
            <div id="isi">
                <head>
                    <h2 style="text-align:center"> Senarai Produk Mengikut Jenama & Pilihan Harga </h2>
                </head>
                <body>
                <?php
                include 'harga_menu.php'; // Display the "Pilihan Harga" form again

                echo "<hr>";
                echo '<div class="card-container">'; // Container for the card divs

                while ($senarai_produk = mysqli_fetch_assoc($papar_query)) {
                    // Check if the current brand is selected and set the 'checked' attribute accordingly
                    $isChecked = in_array($senarai_produk['idjenama'], $selectedBrands) ? 'checked' : '';
                    ?>
                    <!-- Display product information in a card -->
                    <div class="card">
                        <img class="gambar" src="gambar/<?php echo $senarai_produk['gambar']; ?>">
                        <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
                        <p class="price">Jenama : <?php echo $senarai_produk['namaJenama']; ?></p>
                        <p class="price">RM <?php echo $senarai_produk['harga']; ?></p>
                        <!-- Add a form to save the product selection in the "pilihan_simpan.php" page -->
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

                echo '</div>'; // Close the card-container div
                ?>
                </body>
            </div>
            </html>
            <?php
        } else { ?>
            <!-- Display a message if there are no products that match the criteria -->
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

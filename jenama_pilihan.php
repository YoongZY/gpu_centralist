<?php
if (empty($_GET['brand'])) {
    $selectedBrands = []; // Default to an empty array if no values are selected
} else {
    $selectedBrands = $_GET['brand'];
    $selectedBrands = array_map('intval', $selectedBrands); // Convert the values to integers
}

include 'header.php';

// Set the selectedBrands variable as the selected idjenama values
$selectedBrandsString = implode(',', $selectedBrands);
?>

<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <head>
        <h2 style="text-align:center"> Senarai Produk Ikut Jenama </h2>
    </head>
    <body>
        <?php
        // Build the SQL query to fetch products from the database based on selected brands
        $query_jenama = "SELECT * FROM jenama AS t1 INNER JOIN produk AS t2 ON t1.idjenama=t2.idjenama";
        
        // Add a WHERE clause to the SQL query if any brands are selected
        if (!empty($selectedBrands)) {
            $query_jenama .= " WHERE t1.idjenama IN ($selectedBrandsString)";
        }
        
        // Add an ORDER BY clause to the SQL query to sort products by markahpenilaian in descending order
        $query_jenama .= " ORDER BY t2.markahpenilaian DESC";

        // Execute the SQL query
        $papar_query_jenama = mysqli_query($connect, $query_jenama);

        if (mysqli_num_rows($papar_query_jenama) > 0) {
            // Display the harga_menu.php form to allow users to filter products by price range and brands
            include 'harga_menu.php';
            echo "<hr>";
            echo '<div class="card-container">'; // Container for the card divs

            // Loop through each product and display its details in a card
            while ($senarai_jenama = mysqli_fetch_assoc($papar_query_jenama)) {
                // Check if the current product's jenama is in the selected brands array
                $isChecked = in_array($senarai_jenama['idjenama'], $selectedBrands) ? 'checked' : '';
                ?>
                <!-- Display the product card -->
                <div class="card">
                    <img class="gambar" src="gambar/<?php echo $senarai_jenama['gambar']; ?>">
                    <h3><?php echo $senarai_jenama['namaProduk']; ?></h3>
                    <p class="price">Jenama : <?php echo $senarai_jenama['namaJenama']; ?></p>
                    <p class="price">G3D : <?php echo $senarai_jenama['markahpenilaian'] ?></p>
                    <p class="price">RM <?php echo $senarai_jenama['harga'] ?></p>
                    <p>
                        <form method="POST" action="pilihan_simpan.php">
                            <input type="hidden" name="brands" value="<?php echo $selectedBrandsString; ?>">
                            <input type="text" name="idproduk" value="<?php echo $senarai_jenama['idproduk']; ?>" hidden>
                            <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                            <button name="submit" type="submit">PILIH</button></a>
                        </form>
                    </p>
                </div>
            <?php 
            }
            
            echo '</div>';  // Close the card-container div
        } else {
            echo "Tiada produk dalam jenama ini dapat ditemui";
        }
        ?>
    </body>
</html>

<?php include 'header.php'; // Include the header file for common page elements

$jumpa = $_POST['carian']; // Get the search term from the form submission

// Check if the search term is empty. If it is, display an alert and redirect back to the 'dashboard.php' page.
if($jumpa == NULL) {
    echo "<script> alert('Sila masukkan nama produk'); window.location='dashboard.php'</script>";
}
?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?> <!-- Include the menu -->
</div>
<div id="isi">
    <head>
        <h2 style="text-align: center"> Hasil Carian Nama Produk </h2>
    </head>
    <body>
        <?php
            // Build the SQL query to search for products with names containing the search term
            $query_jenama = "SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 ON t1.idjenama=t2.idjenama WHERE t1.namaProduk LIKE '%$jumpa%' ORDER BY t1.namaProduk ASC";
            $papar_query_jenama = mysqli_query($connect,$query_jenama);
            echo '<div class="card-container">'; // Container for the card divs

            // Check if there are any matching products based on the search term
            if (mysqli_num_rows($papar_query_jenama)>0) {
                foreach($papar_query_jenama as $senarai_jenama) {
        ?>
                    <div class="card">
                        <img class="gambar" src="gambar/<?php echo $senarai_jenama['gambar']; ?>">
                        <h3><?php echo $senarai_jenama['namaProduk']; ?></h3>
                        <p class="price">Jenama : <?php echo $senarai_jenama['namaJenama']; ?></p>
                        <p class="price">G3D : <?php echo $senarai_jenama['markahpenilaian']; ?></p>
                        <p class="price">RM <?php echo $senarai_jenama['harga']; ?></p>

                        <!-- Add a form to allow users to save their selection to the 'rekod_pilihan' table -->
                        <p>
                            <form method="POST" action="pilihan_simpan.php">
                                <input type="text" name="idproduk" value="<?php echo $senarai_jenama['idproduk']; ?>" hidden>
                                <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                                <button name="submit" type="submit"> PILIH </button>
                            </form>
                        </p>
                    </div>
            <?php
                }
            } else {
                echo "Maaf, tiada produk yang bersesuaian dengan carian nama anda"; // Display a message if no matching products were found
            }
            echo '</div>';  // Close the card-container div
            ?>
    </body>
</div>
</html>

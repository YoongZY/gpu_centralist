<html>
<body>
<center>
    <h3 style="color:crimson">ISTIMEWA UNTUK ANDA!</h3>
    <!-- Display products randomly -->
    <?php 
    // SQL query to retrieve 3 random products with their brand information
    $query_rawak = "SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 on t1.idjenama=t2.idjenama ORDER BY rand() LIMIT 3";
    $papar_query_rawak = mysqli_query($connect, $query_rawak);

    // Check if there are products to display
    if(mysqli_num_rows($papar_query_rawak) > 0){
        echo '<div class="card-container">'; // Start of the container to display product cards
        
        // Loop through the retrieved products
        foreach($papar_query_rawak as $senarai_produk){ ?>
            <!-- Display product card -->
            <div class="card">
                <!-- Display product image -->
                <img class="gambar" src="gambar/<?php echo $senarai_produk['gambar']; ?>">
                
                <!-- Display product name -->
                <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
                
                <!-- Display brand name -->
                <p><?php echo $senarai_produk['namaJenama']; ?></p>
            </div>
    <?php
        }
        echo "</div>"; // End of the container for product cards
    } else {
        echo "Tiada Produk"; // Displayed when there are no products to show
    }
    ?>
</center>
</body>
</html>

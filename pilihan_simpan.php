<?php
    require 'connect.php'; // Include the database connection file to establish a connection

    // Receive values from POST button "PILIH"
    if (isset($_POST['submit'])) {
        $idproduk = $_POST['idproduk']; // Get the product ID from the form
        $pengguna = $_POST['idaccount']; // Get the user account ID from the form

        // Insert a new record into the "rekod_pilihan" table
        $baharu = "INSERT INTO rekod_pilihan VALUES (NULL, '$pengguna', '$idproduk')";
        
        // Execute the SQL query to insert the record
        $pilihan = mysqli_query($connect, $baharu);

        if ($pilihan) { // Check if the insertion was successful
            // Redirect the user to the product detail page with the selected idproduk
            echo "<script> window.location='produk_detail.php?idproduk=$idproduk'</script>";
        } else {
            // Display an alert and redirect the user to the dashboard page if the insertion fails
            echo "<script> alert('Pilihan GAGAL direkodkan'); window.location:'dashboard.php' </script>";
        }
    }
?>

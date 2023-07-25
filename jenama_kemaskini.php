<?php require 'connect.php'; //Include the "connect.php" file to establish a database connection

// receive value from POST when the form is submitted
if(null !== $_POST['submit']){ 
    $id = $_POST['id']; // Get the ID of the jenama to be updated from the form
    $nama = $_POST['nama']; // Get the updated name of the jenama from the form

    // Update the jenama record in the database with the new name
    $result2 = mysqli_query($connect, "UPDATE jenama SET namaJenama='$nama' WHERE idjenama='$id'");

    // Show an alert to indicate that the jenama update was successful and redirect back to the 'jenama.php' page
    echo "<script> alert ('Kemaskini Jenama BERJAYA'); window.location='jenama.php'</script>";
    
}else{
    // If the form with the name "submit" was not submitted, redirect back to the 'produk.php' page
    echo "<script> window.location='produk.php'</script>";
}
?>

<?php include 'connect.php'; // Include the "connect.php" file to establish a database connection
// Get the "id" parameter from the URL to identify the specific Jenama to delete
$idDel = $_GET['id'];
// Check if there are any produk associated with the Jenama that is being deleted
$result = mysqli_query($connect, "SELECT COUNT(idjenama) FROM produk WHERE idjenama='$idDel'");

if ($result) { // Check if the query was successful
    $row = mysqli_fetch_array($result);
    $count = $row[0]; // Retrieve the count of products associated with the Jenama from the query result

    if ($count == 0) { // If there are no products associated with the Jenama
        // Delete the Jenama from the database
        mysqli_query($connect, "DELETE FROM jenama WHERE idjenama='$idDel'");
        echo "<script> alert ('Penghapusan Jenama BERJAYA'); window.location='jenama.php'</script>";
    } else {
        // If there are products associated with the Jenama, display an alert and prevent the deletion
        echo "<script> alert ('Penghapusan Jenama GAGAL. Sila pastikan semua produk jenama ini sudah dihapus'); window.location='jenama.php'</script>";
    }
} else {
    // If the query failed or no "id" parameter was provided in the URL, redirect back to "jenama.php"
    echo "<script> window.location='jenama.php'</script>";
}
?>

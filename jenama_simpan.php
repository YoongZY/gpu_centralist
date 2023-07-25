<?php require 'connect.php';

if (isset($_POST['submit'])) {
    $jenama = $_POST['jenama'];

    // Prepare the SQL query to insert a new record into the "jenama" table
    $baharu = "INSERT INTO jenama VALUES (NULL, '$jenama')";

    // Execute the SQL query to insert the new record
    $barangan = mysqli_query($connect, $baharu);

    // Check if the insertion was successful and provide feedback to the user
    if ($barangan) {
        echo "<script> alert ('Penambahan Jenama BERJAYA'); window.location='jenama.php'</script>";
    } else {
        echo "<script> alert ('Penambahan Jenama GAGAL'); window.location='jenama_tambah.php'</script>";
    }
}
?>

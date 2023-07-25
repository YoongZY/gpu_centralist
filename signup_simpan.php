<?php require 'connect.php'; // Include the file for database connection

// Check if the form has been submitted
if (isset($_POST['username'])) {
    $idaccount = $_POST['username'];
    $Password = $_POST['password'];
    $Namapanggilan = $_POST['nama'];

    // Check if the provided username already exists in the database
    $query = mysqli_query($connect, "SELECT * FROM pengguna WHERE BINARY idaccount='$idaccount'");
    if (mysqli_num_rows($query) > 0) {
        // If the username already exists, show an alert and redirect to the signup.php page
        echo "<script> alert ('Pendaftaran akaun GAGAL. ID Pengguna sudah dituntut'); window.location='signup.php'</script>";
    } else {
        // If the username is unique, insert the user data into the "pengguna" table in the database
        $daftar1 = "INSERT INTO pengguna VALUES ('$idaccount','$Password','$Namapanggilan','PENGGUNA')";
        $hasil1 = mysqli_query($connect, $daftar1);

        if ($hasil1) {
            // If the insertion is successful, show a success alert and redirect to the index.php page (login page)
            echo "<script> alert ('Pendaftaran akaun BERJAYA'); window.location='index.php'</script>";
        } else {
            // If the insertion fails, show an error alert and redirect to the signup.php page
            echo "<script> alert ('Pendaftaran akaun GAGAL. Sila daftar sekali lagi selepas sistem dibaiki'); window.location='signup.php'</script>";
        }
    }
}
?>

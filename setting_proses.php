<?php require 'connect.php'; // Require the 'connect.php' file for database connection

// Check if the form 'submit1' is submitted, which is for updating user's nama panggilan
if (isset($_POST['submit1'])) {
    $user = $_POST['idaccount']; // Get the user's ID
    $nama = $_POST['nama']; // Get the new nama panggilan

    // Update the user's nama panggilan in the database
    $update = mysqli_query($connect, "UPDATE pengguna SET Namapanggilan='$nama' WHERE BINARY idaccount='$user'");
    
    // Check if the update is successful
    if(mysqli_affected_rows($connect) > 0){
        echo "<script> alert ('Pertukaran nama panggilan BERJAYA. Sila log masuk semula untuk melihat kesannya'); window.location='setting.php'</script>";
    } else {
        echo "<script> alert ('Pertukaran nama panggilan GAGAL. Sila guna nama yang lain'); window.location='setting.php'</script>";
    }

// Check if the form 'submit2' is submitted, which is for changing the user's password
} elseif (isset($_POST['submit2'])) {
    $user = $_POST['idaccount']; // Get the user's ID
    $pass = mysqli_real_escape_string($connect, $_POST['password']); // Get the old password
    $pass2 = mysqli_real_escape_string($connect, $_POST['password2']); // Get the new password
    $pass3 = mysqli_real_escape_string($connect, $_POST['password3']); // Get the password confirmation

    // Check if the old password matches the one in the database
    $update = mysqli_query($connect, "SELECT * from pengguna WHERE BINARY idaccount='$user' and Password='$pass'");
    $row = mysqli_fetch_assoc($update);

    if ($row['Password'] == $pass) {
        // Check if the new password and password confirmation match
        if ($pass2 == $pass3) {
            // Update the user's password in the database
            $update = mysqli_query($connect, "UPDATE pengguna SET Password='$pass2' WHERE BINARY idaccount='$user'");
            echo "<script> alert ('Pertukaran kata laluan BERJAYA'); window.location='setting.php'</script>";
        } elseif ($pass2 != $pass3) {
            echo "<script> alert ('Pertukaran kata laluan GAGAL. Kata Laluan Baharu dan Pengesahan Kata Laluan Baharu tidak sepadan'); window.location='setting.php'</script>";
        } else {
            echo "<script> alert ('Pertukaran kata laluan GAGAL. Sila guna kata laluan yang lain'); window.location='setting.php'</script>";
        }
    } else {
        echo "<script> alert('Pertukaran kata laluan GAGAL. Kata laluan lama salah'); window.location='setting.php'</script>";
    }

// Check if the form 'submit3' is submitted, which is for deleting the user account
} elseif (isset($_POST['submit3'])) {
    $iddel = $_POST['idaccount']; // Get the user's ID

    // Delete user from the database
    $delete = mysqli_query($connect, "DELETE FROM pengguna WHERE BINARY idaccount='$iddel'");
    
    // Check if the delete operation is successful
    if (mysqli_affected_rows($connect) > 0) {
        session_destroy(); // Destroy the current session as the user account is deleted
        echo "<script> alert('Penghapusan akaun BERJAYA'); window.location='index.php'</script>";
    } else {
        echo "<script> alert('Penghapusan akaun GAGAL. Sila cuba sekali lagi selepas sistem dibaiki'); window.location='setting.php'</script>";
    }

} else {
    echo "<script> window.location='setting.php'</script>"; // Redirect to 'setting.php' if no form is submitted
}
?>

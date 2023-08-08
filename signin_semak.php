<?php require 'connect.php'; // Include the file for database connection

if (isset($_POST['username'])) { // Check if the form is submitted with the 'username' field

    // Sanitize and store the input username and password from the form
    $user = mysqli_real_escape_string($connect, $_POST['username']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);

    // Query the database to find the user with the provided credentials
    $query = mysqli_query($connect, "SELECT * FROM pengguna WHERE BINARY idaccount='$user' AND Password='$pass'");
    $row = mysqli_fetch_assoc($query);

    if ($row['Password'] == $pass) { // If the password matches the one in the database

        session_start(); // Start the session

        // Store user information in session variables for later use
        $_SESSION['username'] = $row['idaccount'];
        $_SESSION['nama'] = $row['Namapanggilan'];
        $_SESSION['level'] = $row['Aras'];

        // If the insertion is successful, show a success alert and redirect to the dashboard.php page
        echo "<script> alert ('Log masuk akaun BERJAYA'); window.location='dashboard.php'</script>";
    } else {
        // If the username or password is incorrect, show an error message and redirect to the login page
        echo "<script> alert('ID pengguna atau kata laluan salah'); window.location='index.php'</script>";
    }
}
?>

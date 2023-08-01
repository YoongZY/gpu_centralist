<?php //connect.php
$host = "localhost";            // Database host that links files to the database
$user = "root";                 // Database username of phpMySQL
$password = "";                 // Database password of phpMySQL = null
$database = "gpu_centralist";   // Name of the database

// Establishing a database connection
$connect = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    // Check if the connection was successful, if not, display an error message and exit the script
    echo "Proses sambung ke pangkalan data GAGAL";
    exit();
} else {
    // The connection was successful, and there's nothing to do here.
}

// System information setup
$namasys = "GPU Centralist";    // Name of the system
$web = "GPU Centralist";        // Website or application name
$motto = "Web maklumat GPU";    // Motto or description of the website
?>

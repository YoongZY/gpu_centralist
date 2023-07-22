<?php
require 'connect.php';  
if (isset($_POST['username'])){
    $user = mysqli_real_escape_string($connect, $_POST['username']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);

    // find user in database
    $query = mysqli_query($connect, "SELECT * from pengguna WHERE BINARY idaccount='$user' and Password='$pass'");
    $row = mysqli_fetch_assoc($query);

    if ($row['Password']==$pass){     //set data -> pangkalan data
        session_start(); //start session
        $_SESSION['username'] = $row['idaccount'];
        $_SESSION['nama'] = $row['Namapanggilan'];
        $_SESSION['level'] = $row['Aras'];
        header("location: dashboard.php");
    }else{
        echo "<script> alert('ID pengguna atau kata laluan salah'); window.location='index.php'</script>";
    }
}
?>
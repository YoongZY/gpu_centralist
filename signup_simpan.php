<?php
require 'connect.php';
//info daripada file signup.php
if (isset($_POST['username'])){
    $idaccount = $_POST['username'];
    $Password = $_POST['password'];
    $Namapanggilan = $_POST['nama'];

    //insert data into table "pengguna"
    $daftar1 = "INSERT INTO pengguna VALUES ('$idaccount','$Password','$Namapanggilan','PENGGUNA')";
    $hasil1 = mysqli_query($connect,$daftar1);

    if($hasil1){    //notification
        echo "<script> alert ('Pendaftaran BERJAYA'); window.location='index.php'</script>";
    }else{
        echo "<script> alert ('Pendaftaran GAGAL. Sila daftar sekali lagi selepas sistem dibaiki'); window.location='signup.php'</script>";
    }
}
?>
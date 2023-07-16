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
        echo "<script> alert ('Pendaftaran Berjaya'); window.location='index1.php'</script>";
    }else{
        echo "<script> alert ('Pendaftaran Gagal, Sila semak semula maklumat'); window.location='signup.php'</script>";
    }
}
?>
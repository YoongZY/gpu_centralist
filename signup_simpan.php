<?php
require 'connect.php';
//info daripada file signup.php
if (isset($_POST['username'])){
    $idaccount = $_POST['username'];
    $Password = $_POST['password'];
    $Namapanggilan = $_POST['nama'];

    $query = mysqli_query($connect, "SELECT * from pengguna WHERE BINARY idaccount='$idaccount'");
    if (mysqli_num_rows($query) > 0){
        echo "<script> alert ('Pendaftaran akaun GAGAL. ID Pengguna sudah dituntut'); window.location='signup.php'</script>";
    }else{
        //insert data into table "pengguna"
        $daftar1 = "INSERT INTO pengguna VALUES ('$idaccount','$Password','$Namapanggilan','PENGGUNA')";
        $hasil1 = mysqli_query($connect,$daftar1);

        if($hasil1){    //notification
            echo "<script> alert ('Pendaftaran akaun BERJAYA'); window.location='index.php'</script>";
        }else{
            echo "<script> alert ('Pendaftaran akaun GAGAL. Sila daftar sekali lagi selepas sistem dibaiki'); window.location='signup.php'</script>";
        }
    }
}
?>
<?php require 'connect.php'; 

if (isset($_POST['submit1'])){
    $user = $_POST['idaccount'];
    $nama = $_POST['nama'];
    // update user nama in database
    $update = mysqli_query($connect, "UPDATE pengguna SET Namapanggilan='$nama' WHERE BINARY idaccount='$user'");
    
    if(mysqli_affected_rows($connect) > 0){
        echo "<script> alert ('Pertukaran nama panggilan BERJAYA. Sila log masuk semula untuk melihat kesannya'); window.location='setting.php'</script>";
    }else{
        echo "<script> alert ('Pertukaran nama panggilan GAGAL. Sila guna nama yang lain'); window.location='setting.php'</script>";
    }

}elseif (isset($_POST['submit2'])){
    $user = $_POST['idaccount'];
    $pass = mysqli_real_escape_string($connect, $_POST['password']);
    $pass2 = mysqli_real_escape_string($connect, $_POST['password2']);
    $pass3 = mysqli_real_escape_string($connect, $_POST['password3']);
    
    $update = mysqli_query($connect, "SELECT * from pengguna WHERE BINARY idaccount='$user' and Password='$pass'");
    $row = mysqli_fetch_assoc($update);

    if ($row['Password']==$pass){
        if ($pass2 == $pass3){
            // update user password in database
            $update = mysqli_query($connect, "UPDATE pengguna SET Password='$pass2' WHERE BINARY idaccount='$user'");
            echo "<script> alert ('Pertukaran kata laluan BERJAYA'); window.location='setting.php'</script>";
        }elseif ($pass2 != $pass3){
            echo "<script> alert ('Pertukaran kata laluan GAGAL. Kata Laluan Baharu dan Pengesahan Kata Laluan Baharu tidak sepadan'); window.location='setting.php'</script>";
        }else{
            echo "<script> alert ('Pertukaran kata laluan GAGAL. Sila guna kata laluan yang lain'); window.location='setting.php'</script>";
        }
    }else{
        echo "<script> alert('Pertukaran kata laluan GAGAL. Kata laluan lama salah'); window.location='setting.php'</script>";
    }

}elseif (isset($_POST['submit3'])){
    $iddel = $_POST['idaccount'];

    // Delete user from the database
    $delete = mysqli_query($connect, "DELETE FROM pengguna WHERE BINARY idaccount='$iddel'");
    
    if (mysqli_affected_rows($connect) > 0){
        session_destroy(); // Destroy the current session
        echo "<script> alert('Penghapusan akaun BERJAYA'); window.location='index.php'</script>";
    }else{
        echo "<script> alert('Penghapusan akaun GAGAL. Sila cuba sekali lagi selepas sistem dibaiki'); window.location='setting.php'</script>";
    }

}else{
    echo "<script> window.location='setting.php'</script>";
}
?>
<?php include 'connect.php';
#get URL
$idDel = $_GET['id'];

#delete jenama
$result = mysqli_query($connect, "SELECT COUNT(idjenama) FROM produk WHERE idjenama='$idDel'");
if($result){
    $row = mysqli_fetch_array($result);
    $count = $row[0]; // Retrieve count from query result
    if ($count == 0) {
        mysqli_query($connect, "DELETE FROM jenama WHERE idjenama='$idDel'");
        echo "<script> alert ('Penghapusan Jenama BERJAYA'); window.location='jenama.php'</script>";
    } else {
        echo "<script> alert ('Penghapusan Jenama GAGAL. Sila pastikan semua produk jenama ini sudah dihapus'); window.location='jenama.php'</script>";
    }   
}else{
    echo "<script> window.location='jenama.php'</script>";
}
?>
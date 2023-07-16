<?php require 'connect.php';    #sambung database
# receive value from POST
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    //update
    $result2 = mysqli_query($connect, "UPDATE jenama SET namaJenama='$nama' WHERE idjenama='id'");
    echo "<script> alert ('Kemaskini Jenama BERJAYA'); window.location='jenama.php'</script>";
}
?>
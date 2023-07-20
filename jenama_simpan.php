<?php require 'connect.php';

if(isset($_POST['submit'])){
    $jenama=$_POST['jenama'];

    //input record into database
    $baharu = "INSERT INTO jenama VALUES (NULL,'$jenama')";
    $barangan = mysqli_query($connect, $baharu);
    #feedback
    if($barangan){
        echo "<script> alert ('Penambahan Jenama BERJAYA'); window.location='jenama.php'</script>";
    }else{
        echo "<script> alert ('Penambahan Jenama GAGAL'); window.location='jenama_tambah.php'</script>";
    }
}
?>
<?php require 'connect.php';
if(isset($_POST['file'])){
    $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"]>0){
        $file = fopen($filename,"r");
        while(($getdata=fgetcsv($file,10000,","))!==FALSE){
            //MASUK DATA DALAM JADUAL
            $import = "INSERT INTO jenama (idjenama, namaJenama) values (NULL, '".$getdata[0]."')";
            //sql query
            $tambah=mysqli_query($connect,$import);
            if(!isset($tambah)){
                echo "<script>alert('Pindah naik fail CSV GAGAL'); window.location='import.php'</script>";
            }else{
                echo "<script>alert('Pindah naik fail CSV BERJAYA'); window.location='jenama.php'</script>";
            }
        } 
        fclose($file);
    }
}else{
    echo "<script>alert('Sila memilih fail CSV untuk diimport'); window.location='import.php'</script>";
}
?>
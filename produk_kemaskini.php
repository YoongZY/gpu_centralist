<?php require 'connect.php';
    if(null !== ['submit']) {
        $gambar = $_FILES['gambar']['name'];
        $ext = substr(strrchr($_FILES['gambar']['name'],"."), 1);
        $newnamepic = md5(rand()*time()). "$ext";
        $uploadPath = "gambar/".$newnamepic;
        $isUploaded = move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath);

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenama = $_POST['jenama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $pautan = $_POST['pautan'];
        $markah = $_POST['markah'];

        //update
        $result2 = mysqli_query($connect,"UPDATE produk SET namaProduk='$nama', idjenama='$jenama', harga='$harga', deskripsi='$deskripsi', gambar='$gambar', pautanpembelian='$pautan', markahpenilaian='$markah' WHERE idproduk='$id'");
        if($result2){
            echo "<script> alert('Kemaskini Produk Berjaya');window.location='produk.php'</script>";
        }else{
            echo "<script> window.location='produk.php'</script>";
        }
    }else{
        echo "<script> window.location='produk.php'</script>";
    }
?>
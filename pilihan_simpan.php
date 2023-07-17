<?php
    require 'connect.php';  #sambung database
    # recieve nilai di POST
    if(isset($_POST['submit'])) {
        $idproduk = $_POST['idproduk'];
        $pengguna = $_POST['idaccount'];
        # masuk rekod into table
        $baharu = "INSERT INTO rekod_pilihan VALUES (NULL, '$pengguna', '$idproduk')";
        #laksana SQL
        $pilihan = mysqli_query($connect, $baharu);

        if ($pilihan) { #mesej
            echo "<script> window.location='produk_detail.php ? idproduk=$idproduk'</script>";
        }else{
            echo "<script> alert('Pilihan Gagal direkodkan'); window.location:'dashboard.php' </script>";
        }
    }
?>
<html>
<body><center>
    <h3 style="color:crimson">ISTIMEWA UNTUK ANDA!</h3>
    <!-- papar as rawak -->
    <?php 
    $query_rawak = "SELECT * FROM produk AS t1 INNER JOIN jenama AS t2 on t1.idjenama=t2.idjenama ORDER BY rand() LIMIT 3";
    $papar_query_rawak = mysqli_query($connect, $query_rawak);
    if(mysqli_num_rows($papar_query_rawak) > 0){
        echo '<div class="card-container">';
        foreach($papar_query_rawak as $senarai_produk){ ?>
            <!-- papar produk -->
            
                <div class="card">
                    <img class="gambar" src="gambar/<?php echo $senarai_produk['gambar']; ?>">
                    <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
                    <p><?php echo $senarai_produk['namaJenama']; ?></p>
                </div>
            
    <?php
        }
        echo "</div>";
    }else{
        echo "Tiada Produk";
    } ?>
</center></body>
</html>
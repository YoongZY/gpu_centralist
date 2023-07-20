<?php include 'header.php'; ?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>

<div id="isi">
    <head>
        <h2 style="text-align: center"> Tambah Produk Baharu </h2>
    </head>
    <body>
        <form method="POST" action="produk_simpan.php" enctype="multipart/form-data">
            
            <!-- input maklumat -->
            <p>Nama Produk <br>
            <input type="text" name="nama" placeholder="Masukkan Nama Produk" size="50" required autofocus>
            </p>

            <p>Jenama <br>
            <select name="jenama">
                <?php $jenama=mysqli_query($connect,"SELECT * FROM jenama");
                while ($pilihan=mysqli_fetch_array($jenama)) {
                    echo "<option hidden selected> --PILIH-- </option>";
                    echo "<option value='$pilihan[idjenama]'> $pilihan[namaJenama] </option>";
                } ?>
            </select>
            <a href="jenama.php"> Senarai Jenama </a>
            </p>
        
            <p>Harga <br>
            RM <input type="text" name="harga" placeholder="00.00" size="46" required>
            </p>

            <p>Deskripsi Produk <br>
            Bus Interface: <input type="text" name="det1" placeholder="Antaramuka bas GPU" size="37" required><br>
            Core Clock(s): <input type="text" name="det2" placeholder="0000" size="20" required> MHz<br>
            Memory Size: <input type="text" name="det3" placeholder="00000" size="20" required> GB<br>
            Memory Type: <input type="text" name="det4" placeholder="GDDR6" size="20" required><br>
            DirectX: <input type="text" name="det5" placeholder="12_2" size="10" required><br>
            OpenGL: <input type="text" name="det6" placeholder="4.6" size="10" required><br>
            Release Date: <input type="text" name="det7" placeholder="DD/MM/YYYY" size="37" required>
            </p>

            <p>Gambar Produk <br>
            <input type="file" name="gambar" accept=".jpg,.jpeg,.png" required>
            </p>

            <p>Pautan Pembelian Produk <br>
            <textarea name="pautan" placeholder="Masukkan URL Pembelian Produk" rows="2" cols="50" required></textarea>
            </p>

            <p>Markah G3D Produk<br>
            <input type="text" name="markah" placeholder="Masukkan Markah G3D Produk" size="50" required>
            </p>

            <br>
            <div>
                <button name="submit" type="submit"> SIMPAN </button>
                <button type="reset"> RESET </button>
            </div>
            <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
        </form>
    </body>
</div>
</html>
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
            <textarea name="deskripsi" placeholder="Base Clock: _ MHz
Memory Size: _ GB
Memory Type: GDDR_
DirectX: _
Release: DD-MM-YYYY" rows="10" cols="50" required></textarea>
            </p>

            <p>Gambar Produk <br>
            <input type="file" name="gambar" accept=".jpg,.jpeg,.png" required>
            </p>

            <p>Pautan Pembelian Produk <br>
            <textarea name="pautan" placeholder="Masukkan URL Pembelian Produk" rows="2" cols="50" required></textarea>
            </p>

            <p>Markah Penilaian Produk<br>
            <input type="text" name="markah" placeholder="Masukkan Markah Nilai Relatif Produk" maxlength="3" size="45" required> /100
            </p>

            <br>
            <div>
                <button name="submit" type="submit"> SIMPAN </button>
                <button type="reset"> RESET </button>
            </div>
            <font color='red'> * Pastikan Maklumat Dimasukkan Betul </font>
        </form>
    </body>
</div>
</html>
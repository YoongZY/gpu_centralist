<?php include 'header.php'; ?>
<html>
<div id="menu">
    <?php include 'menu2.php' ; ?>
</div>
<div id="isi">
    <head>
        <h2 style="text-align:center"> Tambah Jenama Baharu </h2>
    </head>
    <body>
        <form method="POST" action="jenama_simpan.php">
            <p>Nama Jenama<br>
            <input type="text" name="jenama" placeholder="Masukkan Nama Jenama" size="50" required autofocus></p><br>
            <div>
                <button name="submit" type="submit"> SIMPAN </button>
                <button type="reset"> RESET </button>
            </div>
            <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
        </form>
    </body>
</div>
</html>
<?php include 'header.php' ?>
<html>
<br>
<div>
    <head>  <!--header-->
        <h2 style="text-align:center">Pendaftaran Pengguna Baharu</h2>
    </head>
    <body>
        <center><form method="POST" action="signup_simpan.php"> <!--info to signup_simpan.php-->
            <!--input id pengguna-->
            <p><b>🔐ID Pengguna : </b><br>
            <input type="text" name="username" placeholder="ID yang mudah diingati" maxlength="50" size="60" required autofocus></p>
            <!--input password-->
            <p><b>🔑Kata Laluan : </b><br>
            <input type="text" name="password" placeholder="Kata laluan anda (Minimum 8 nombor/huruf)" minlength="8" maxlength="255" size="60" required></p>
            <!--input nama-->
            <p><b>🔖Nama Panggilan : </b><br>
            <input type="text" name="nama" placeholder="Nama anda untuk dipanggil" maxlength="100" size="60" required></p>
            
            <div>   <!--buttons-->
                <button name="hantar" type="submit"> DAFTAR </button>
                <button type="reset"> PADAM </button>
        </form>
                <form action="index.php"><br>
                    <button type="submit"> BALIK </button>
                </form>
            </div>
            <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
        </center>
    </body>
</div>
</html>
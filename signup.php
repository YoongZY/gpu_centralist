<?php include 'header.php' ?>
<html>
<br>
<div>
    <head>  <!-- Header as title -->
        <h2 style="text-align:center">Pendaftaran Pengguna Baharu</h2>
    </head>
    <body>
        <center>
            <form method="POST" action="signup_simpan.php"> <!-- The form submits data to signup_simpan.php for processing -->
                <!-- Input for ID Pengguna (username) -->
                <p><b>🔐ID Pengguna :</b><br>
                <input onblur="checkLength(this)" type="text" name="username" placeholder="ID yang mudah diingati (Maximum 30 nombor/huruf)" maxlength="30" size="60" required autofocus></p>
                
                <script>
                    function checkLength (e1){
                        if (e1.value.length == 30){
                            alert ("Panjang ID pengguna sudah mencapai maksimum")
                        }
                    }
                </script>

                <!-- Input for Kata Laluan (password) -->
                <p><b>🔑Kata Laluan :</b><br>
                <input type="text" name="password" placeholder="Kata laluan anda (Minimum 8 nombor/huruf)" minlength="8" maxlength="255" size="60" required></p>

                <!-- Input for Nama Panggilan (display name) -->
                <p><b>🔖Nama Panggilan :</b><br>
                <input type="text" name="nama" placeholder="Nama anda untuk dipanggil" maxlength="100" size="60" required></p>
            
                <div>   <!-- Buttons -->
                    <button name="hantar" type="submit"> DAFTAR </button> <!-- Submit button to register the user -->
                    <button type="reset"> PADAM </button> <!-- Reset button to clear form inputs -->
            </form>
                    <!-- Back button to return to the index.php (login page) -->
                    <form action="index.php"><br>
                        <button type="submit"> BALIK </button>
                    </form>
                </div>
                <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font> <!-- Note for the user -->
        </center>
    </body>
</div>
</html>

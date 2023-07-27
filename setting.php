<?php require 'connect.php'; 
include 'header.php'; // Include the header of the page
?>
<html>
<meta charset="UTF-8">
<!-- Call the menu -->
<div id="menu">
    <?php include 'menu2.php'; ?> <!-- Include the menu content -->
</div>

<!-- Content section for user settings -->
<div id="isi">
    <body>
        <?php if ($_SESSION['level'] != "PENGGUNA") { ?> <!-- Display settings for admin -->
            <center><h2> Setting Akaun <?php echo $_SESSION['nama']?> </h2></center>

            <!-- Form section for changing the nama panggilan -->
            <div class="doublecol">
                <h3>Tukar Nama Panggilan</h3>

                <form method="POST" action="setting_proses.php">
                    <!-- Input field for new nama panggilan -->
                    <p>Nama Panggilan Baharu <br>
                    <input type="text" name="nama" placeholder="Sila masukkan nama panggilan baharu" maxlength="100" size="65" required>
                    </p>

                    <div>
                        <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                        <!-- Buttons for submitting and resetting the form -->
                        <button name="submit1" type="submit"> SIMPAN </button>
                        <button type="reset"> RESET </button>
                    </div>
                    <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
                </form>
            </div>

            <!-- Form section for changing the password -->
            <div class="doublecol">
                <h3>Tukar Kata Laluan</h3>

                <form method="POST" action="setting_proses.php">
                    <!-- Input fields for old password, new password, and password confirmation -->
                    <p>Kata Laluan Lama <br>
                    <input type="password" name="password" placeholder="Sila masukkan kata laluan lama" minlength="8" maxlength="255" size="65" required>
                    </p>

                    <p>Kata Laluan Baharu <br>
                    <input type="password" name="password2" placeholder="Sila masukkan kata laluan baharu (Minimum 8 nombor/huruf)" minlength="8" maxlength="255" size="65" required>
                    <br><br>
                    <input type="password" name="password3" placeholder="Sila masukkan kata laluan baharu sekali lagi" minlength="8" maxlength="255" size="65" required>
                    </p>

                    <div>
                        <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                        <!-- Buttons for submitting and resetting the form -->
                        <button name="submit2" type="submit"> SIMPAN </button>
                        <button type="reset"> RESET </button>
                    </div>
                    <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
                </form>
            </div>

        <?php } else { ?> <!-- Display settings for user -->
            <center><h2> Setting Akaun <?php echo $_SESSION['nama']?> </h2></center>

            <!-- Form section for changing the nama panggilan -->
            <div class="doublecol">
                <h3>Tukar Nama Panggilan</h3>

                <form method="POST" action="setting_proses.php">
                    <!-- Input field for new nama panggilan -->
                    <p>Nama Panggilan Baharu <br>
                    <input type="text" name="nama" placeholder="Sila masukkan nama panggilan baharu" maxlength="100" size="65" required>
                    </p>

                    <div>
                        <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                        <!-- Buttons for submitting and resetting the form -->
                        <button name="submit1" type="submit"> SIMPAN </button>
                        <button type="reset"> RESET </button>
                    </div>
                    <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
                </form>
            </div>

            <!-- Form section for changing the password -->
            <div class="doublecol">
                <h3>Tukar Kata Laluan</h3>

                <form method="POST" action="setting_proses.php">
                    <!-- Input fields for old password, new password, and password confirmation -->
                    <p>Kata Laluan Lama <br>
                    <input type="password" name="password" placeholder="Sila masukkan kata laluan lama" maxlength="255" size="65" required>
                    </p>

                    <p>Kata Laluan Baharu <br>
                    <input type="password" name="password2" placeholder="Sila masukkan kata laluan baharu (Minimum 8 nombor/huruf)" minlength="8" maxlength="255" size="65" required>
                    <br><br>
                    <input type="password" name="password3" placeholder="Sila masukkan kata laluan baharu sekali lagi" minlength="8" maxlength="255" size="65" required>
                    </p>

                    <div>
                        <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                        <!-- Buttons for submitting and resetting the form -->
                        <button name="submit2" type="submit"> SIMPAN </button>
                        <button type="reset"> RESET </button>
                    </div>
                    <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
                </form>
            </div>

            <!-- Form section for deleting the user account -->
            <div class="doublecol">
                <h3>Hapusan Akaun</h3>

                <form method="POST" action="setting_proses.php">
                    <!-- Button to initiate the account deletion with a confirmation prompt -->
                    <br>
                    <input type="text" name="idaccount" value="<?php echo $_SESSION['username']; ?>" hidden>
                    <button name="submit3" type="submit" onclick="return confirm('Anda Pasti?')"> HAPUS </button><br>
                    <font color='crimson'> * Maklumat berkaitan yang dihapuskan tidak dapat ditemui semula </font>
                </form>
            </div>

        <?php } ?>
    </body>
</div>
</html>

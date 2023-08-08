<center>
    <h2> Log Masuk </h2>
    <form method="POST" action="signin_semak.php"> <!-- The form will submit to signin_semak.php for authentication -->

        <div>
            <b>🔐ID Pengguna :  </b><br> <!-- Username input -->
            <input onblur="checkLength(this)" type="text" name="username" placeholder="Sila isikan ID pengguna" maxlength="30" size="20" 
            required autofocus />
            
            <script>
                function checkLength (e1){
                    if (e1.value.length == 30){
                        alert ("Panjang ID pengguna sudah mencapai maksimum")
                    }
                }
            </script>

            <br>
            <h3></h3>
            <b>🔑Kata Laluan :  </b><br> <!-- Password input -->
            <input type="password" name="password" placeholder="Sila masukkan kata laluan" maxlength="255" size="20" required autofocus />
        </div>

        <div> <!-- Submit & Reset buttons -->
            <h2></h2>
            <button name="SUBMIT" type="submit"> LOG IN </button> <!-- Log in button -->
            <button type="reset"> RESET </button> <!-- Reset button to clear the form inputs -->
        </div>
    </form>
</center>

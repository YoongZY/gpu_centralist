<center>
<h2> Log Masuk </h2>
<form method="POST" action="signin_semak.php">  <!--link input to signin_semak.php-->
    <div>
        <b>🔐Username :  </b><br>   <!--Username input-->
        <input type="text" name="username" placeholder="Sila isikan ID pengguna" maxlength="255" size="20" required autofocus />
        <br>
        <h3></h3>
        <b>🔑Password :  </b><br>   <!--Password input-->
        <input type="password" name="password" placeholder="Sila masukkan kata laluan" maxlength="255" size="20" required autofocus />
    </div>
    <div>   <!--submit&reset input button-->
        <h2></h2>
        <button name="SUBMIT" type="submit"> LOG IN </button>
        <button type="reset"> RESET </button>
    </div>
</form>
</center>
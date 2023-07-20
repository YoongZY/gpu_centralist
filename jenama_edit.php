<?php 
    include 'header.php'; #call header
    $idjenama = $_GET['id']; #get url
    #link table jenama
    $datajenama = mysqli_query($connect, "SELECT * FROM jenama WHERE idjenama='$idjenama'");
    $qJenama = mysqli_fetch_array($datajenama);
?>
<html>
<div id="menu"> <!--papar menu-->
    <?php include 'menu2.php' ; ?>
</div>

<div id="isi">  <!--papar isi-->
    <head>
        <h2 style="text-align:center"> Edit Jenama </h2>
    </head>
    <body>
        <form method="POST" action="jenama_kemaskini.php">
            <p>JENAMA<br>
            <input type="text" name="nama" value="<?php echo $qJenama['namaJenama']; ?>" size="50" required autofocus></p>
            <input type="text" name="id" value="<?php echo $qJenama['idjenama']; ?>" hidden>
            <br>
            <button name="submit" type="submit"> SIMPAN </button>
            <br>
            <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font>
        </form>
    </body>
</div>
</html>
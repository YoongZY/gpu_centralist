<?php 
    include 'header.php'; // Include the "header.php" file, which contains the common header elements
    $idjenama = $_GET['id']; // Get the "id" parameter from the URL to identify the specific jenama to edit
    // Query the database to get the jenama data based on the provided "id"
    $datajenama = mysqli_query($connect, "SELECT * FROM jenama WHERE idjenama='$idjenama'");
    $qJenama = mysqli_fetch_array($datajenama); // Fetch the jenama data and store it in the $qJenama variable
?>
<html>
<div id="menu"> <!-- Display the menu section -->
    <?php include 'menu2.php' ; // Include the "menu2.php" file, which contains the menu elements ?>
</div>

<div id="isi">  <!-- Display the content section -->
    <head>
        <h2 style="text-align:center"> Edit Jenama </h2> <!-- Display the heading for the edit form -->
    </head>
    <body>
        <form method="POST" action="jenama_kemaskini.php"> <!-- A form to update the Jenama data and submit it to "jenama_kemaskini.php" -->
            <p>JENAMA<br>
            <input type="text" name="nama" value="<?php echo $qJenama['namaJenama']; ?>" size="50" required autofocus></p> <!-- Display an input field with the current Jenama name to allow editing -->
            <input type="text" name="id" value="<?php echo $qJenama['idjenama']; ?>" hidden> <!-- A hidden input field to store the Jenama ID for identification during the update process -->
            <br>
            <button name="submit" type="submit"> SIMPAN </button> <!-- Submit button to update the Jenama data -->
            <br>
            <font color='green'> * Pastikan maklumat dimasukkan adalah betul </font> <!-- A note to ensure correct information input -->
        </form>
    </body>
</div>
</html>

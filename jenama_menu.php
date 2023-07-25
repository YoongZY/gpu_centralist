<h4>🏷️Jenama</h4>
<form action="jenama_pilihan.php" method="GET">
    <?php   // Select every jenama in the jenama table
    $query_jenama="SELECT * FROM jenama";
    $papar_query_jenama=mysqli_query($connect, $query_jenama);

    // Check if there are any jenama records in the database
    if(mysqli_num_rows($papar_query_jenama)>0){

        // Loop through each jenama record and display a checkbox for each one
        while ($senarai_brand = mysqli_fetch_assoc($papar_query_jenama)) {
            $brandID = $senarai_brand['idjenama'];
            $isChecked = in_array($brandID, $_GET['brand'] ?? []);
            ?>
            <input type="checkbox" name="brand[]" onclick="onlyOne2(this)" value="<?php echo $brandID; ?>" <?php if ($isChecked) echo "checked"; ?>>
            <?php echo $senarai_brand['namaJenama']; ?><br/>
            <?php
        } ?>
        
        <br>
        <button type="submit"> PILIH </button>
    <?php 
    } ?>
</form>

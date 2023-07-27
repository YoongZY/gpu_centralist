<center> <!-- Center align the content within the div -->
    <div>
        <form action="jenama_harga.php" method="POST"> <!-- The form action points to "jenama_harga.php" for processing the search -->
            <h4>Pilihan Harga</h4> <!-- Display the heading "Pilihan Harga" -->

            <!-- Input fields for entering price range -->
            <div>
                Bermula RM
                <input type="text" name="harga1" size="5" placeholder="1000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' autofocus>
                hingga RM
                <input type="text" name="harga2" size="5" placeholder="2000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' autofocus>
            </div>

            <!-- Hidden input field to store selected brands -->
            <input type="hidden" name="brands" value="<?php echo $selectedBrandsString; ?>">

            <h5><button name="pilih" type="submit"> SEARCH </button></h5> <!-- Submit button to trigger the search -->
        </form>
    </div>
</center>

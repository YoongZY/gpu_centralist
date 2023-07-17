<center>
<div>
    <form action="jenama_harga.php" method="POST">
        <h4>Pilihan Harga</h4>
        <div>
            Bermula RM
            <input type="text" name="harga1" size="5" placeholder="1000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' autofocus>
            hingga RM
            <input type="text" name="harga2" size="5" placeholder="2000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' size="5">
        </div>
        <h5><button name="pilih" type="submit"> SEARCH </button></h5>
        <input type="hidden" name="brands" value="<?php echo $selectedBrandsString; ?>">
    </form>
</div>
</center>

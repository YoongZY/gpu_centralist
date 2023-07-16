<center>
<div>
    <form action="jenama_harga.php?brands=<?php echo implode(',', $selectedBrands); ?>" method="POST">
        <h4>Pilihan Harga</h4>
        <div>
            Bermula RM
            <input type="text" name="harga1" size="5" placeholder="1000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' autofocus>
            hingga RM
            <input type="text" name="harga2" size="5" placeholder="2000.00" onkeypress='return event.charCode>=48 && event.charCode<=57' size="5">
        </div>
        <h5><button name="pilih" type="submit"> SEARCH </button></h5>
    </form>
</div>
</center>

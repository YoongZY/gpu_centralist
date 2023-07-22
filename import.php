<?php include 'header.php'; ?>

<html>
<body>
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <div id="isi">
        <center>
            <h2>Import Jenama dari Fail CSV</h2>
        </center>
        <label> Pilih lokasi fail CSV/Excel</label>
        <!-- upload fail CSV-->
        <form action="import_simpan.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" accept=".CSV" required>
            <br><br>
            <button type="submit" id="submit" name="import"> UPLOAD </button><br>
            <font color=green> File mesti dalam bentuk .CSV </font>
        </form>
        Contoh fail: <br>
        JENAMA1,JENAMA2,JENAMA3,JENAMA4
        <br>
    </div>
</body>
</html>
<?php include 'header.php'; // Include the "header.php" file, which contains the common header elements ?>
<html>
<body>
    <div id="menu"> <!-- Display the menu section -->
        <?php include 'menu2.php'; // Include the "menu2.php" file, which contains the menu elements ?>
    </div>
    <div id="isi"> <!-- Display the main content section -->
        <center> <!-- Center-align the content -->
            <h2>Import Jenama dari Fail CSV</h2> <!-- Heading for the import section -->
        </center>
        <label> Pilih lokasi fail CSV/Excel</label> <!-- Label for the file input field -->
        <!-- Upload fail CSV using a form with "POST" method to "import_simpan.php" -->
        <form action="import_simpan.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" accept=".CSV" required> <!-- File input field to select the CSV file -->
            <br><br>
            <button type="submit" id="submit" name="import"> UPLOAD </button><br> <!-- Upload button to submit the form -->
            <font color=green> File mesti dalam bentuk .CSV </font> <!-- Instruction for the file format -->
        </form>
        <br><br>
        <b>","</b> & <b>"(ENTER)"</b> boleh digunakan sebagai pemisahan data
        <h4>Contoh fail: </h4> <!-- Example CSV file format -->
        JENAMA1,JENAMA2,JENAMA3<br>
        JENAMA4,JENAMA5,JENAMA6<br>
    </div>
</body>
</html>

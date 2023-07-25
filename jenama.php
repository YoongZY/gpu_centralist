<?php include 'header.php'; ?>
<html>
<meta charset="UTF-8">
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <body>
        <center>
            <h2> Senarai Jenama </h2>
        </center>
        <table class="table">
            <!-- Table header to display column names -->
            <tr id="row1">
                <td>Bil</td>
                <td>Nama Jenama</td>
                <td>Tindakan
                    <!-- Link to navigate to the import.php page with a file upload icon -->
                    <a href="import.php" style="float:right;"> 📥 </a>
                </td>
            </tr>
            <?php
            // Fetch records from the "jenama" table and display them in the table
            $no = 1; // Counter for serial number
            $data1 = mysqli_query($connect, "SELECT * FROM jenama ORDER BY namaJenama ASC");
            while ($info1 = mysqli_fetch_array($data1)) { ?>
                <tr>
                    <!-- Display the serial number -->
                    <td><?php echo $no; ?></td>
                    <!-- Display the "namaJenama" value from the "jenama" table -->
                    <td><?php echo $info1['namaJenama']; ?></td>
                    <td><!-- Actions column containing links -->
                        <!-- Link to navigate to jenama_edit.php page for editing a specific jenama -->
                        <a href="jenama_edit.php?id=<?php echo $info1["idjenama"]; ?>"> &#128393 </a>
                        <!-- Link to navigate to jenama_hapus.php page for deleting a specific jenama -->
                        <a href="jenama_hapus.php?id=<?php echo $info1["idjenama"]; ?>" onclick="return confirm('Anda Pasti?')"> &#10060 </a>
                    </td>
                </tr>
                <?php $no++; // Increment the serial number counter
            } ?>
        </table>
    </body>
</div>
</html>

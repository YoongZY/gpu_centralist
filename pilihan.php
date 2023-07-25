<?php include 'header.php'; ?> <!-- Include the header file which contains the common heading code -->

<html>
<script src="print_util.js"></script> <!-- Include the JavaScript file for printing utility functions -->

<div id="menu"> <!-- Call the menu -->
    <?php include 'menu2.php'; ?> <!-- Include the menu2.php file to display the appropriate menu based on user role -->
</div>

<div id="isi"> <!-- Content section -->
    <body>
        <center>
            <h2> Statistik Pilihan Pengguna </h2> <!-- Display the title for the statistics -->
        </center>
        <table class="table"> <!-- Create a table to display the statistics -->
            <tr id="row1">
                <td>Bil</td>
                <td>Nama Produk</td>
                <td>Jenama</td>
                <td>Harga</td>
                <td>Gambar</td>
                <td>Bilangan</td>
            </tr>
            <?php
            $no=1; // Initialize a counter for the table rows
            // Query to fetch data from multiple tables and calculate the number of selections for each product
            $data1 = mysqli_query($connect, "SELECT t2.namaProduk, COUNT(t1.idaccount) AS kira, t3.namaJenama, t2.harga, t2.gambar FROM rekod_pilihan AS t1 INNER JOIN produk AS t2 INNER JOIN jenama AS t3 ON t1.idproduk=t2.idproduk AND t3.idjenama=t2.idjenama GROUP BY t1.idproduk ORDER BY COUNT(t1.idaccount) DESC");
            while ($info1 = mysqli_fetch_array($data1)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td> <!-- Display the row number -->
                    <td><?php echo $info1['namaProduk']; ?></td> <!-- Display the product name -->
                    <td><?php echo $info1['namaJenama']; ?></td> <!-- Display the brand name -->
                    <td>RM <?php echo $info1['harga']; ?></td> <!-- Display the product price -->
                    <td><img class="gambar" src="gambar/<?php echo $info1['gambar']; ?>"></td> <!-- Display the product image -->
                    <td><?php echo $info1['kira']; ?></td> <!-- Display the number of times the product has been selected -->
                </tr>
            <?php
                $no++; // Increment the counter for the next row
            }
            ?>
            <tr id="row1">
                <td colspan="6">
                    <center>
                        <br>
                        <font style='font-size:12px'>~~~~~ Senarai Tamat ~~~~~<br> <!-- Display the end of the list -->
                        Jumlah Pilihan : <?php echo $no-1; ?> <!-- Display the total number of selections -->
                        </font>
                        <p><button onclick="printDiv('isi')"> CETAK </button></p> <!-- Button to print the content section -->
                    </center>
                </td>
            </tr>
        </table>
    </body>
</div>
</html>

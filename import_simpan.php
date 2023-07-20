<?php require 'connect.php';

if (isset($_FILES['file'])) {
    $filename = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        $successes = 0; // Counter for successful insertions

        while (($getdata = fgetcsv($file, 10000, ",")) !== FALSE) {
            // Get the value from the CSV row
            $namaJenama = $getdata[0];

            // Prepare the SQL query
            $import = "INSERT INTO jenama (idjenama, namaJenama) values (NULL, '$namaJenama')";

            // Execute the query
            $tambah = mysqli_query($connect, $import);

            // Check if insertion was successful
            if ($tambah) {
                $successes++;
            }
        }

        fclose($file);

        if ($successes > 0) {
            echo "<script>alert('Pindah naik fail CSV BERJAYA. Jumlah baris berjaya dimasukkan: $successes'); window.location='jenama.php'</script>";
        } else {
            echo "<script>alert('Pindah naik fail CSV GAGAL. Tiada baris berjaya dimasukkan.'); window.location='jenama.php'</script>";
        }
    }
} else {
    echo "<script>alert('Sila memilih fail CSV untuk diimport'); window.location='import.php'</script>";
}

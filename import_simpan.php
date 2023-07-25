<?php require 'connect.php'; // Require connect.php file to establish a connection to the database

if (isset($_FILES['file'])) { // Check if a file has been uploaded via the form
    $filename = $_FILES["file"]["tmp_name"]; // Get the temporary name of the uploaded file
    if ($_FILES["file"]["size"] > 0) { // Check if the uploaded file is not empty
        $file = fopen($filename, "r"); // Open the uploaded file in read mode
        $successes = 0; // Counter for successful insertions

        while (($getdata = fgetcsv($file, 10000, ",")) !== FALSE) { // Loop through each row in the CSV file
            // Loop through each value in the CSV row
            foreach ($getdata as $value) {
                // Get the value from the CSV row and sanitize it to prevent SQL injection
                $namaJenama = mysqli_real_escape_string($connect, $value);
                // Prepare the SQL query to insert the sanitized value into "jenama" table
                $import = "INSERT INTO jenama (idjenama, namaJenama) VALUES (NULL, '$namaJenama')";
                // Execute the query to insert the data into the database
                $tambah = mysqli_query($connect, $import);
                // Check if insertion was successful
                if ($tambah) {
                    $successes++;
                }
            }
        }

        fclose($file); // Close the CSV file after processing

        if ($successes > 0) {
            // If at least one row was successfully inserted, display a success message and redirect to "jenama.php"
            echo "<script>alert('Pindah naik fail CSV BERJAYA. Jumlah baris berjaya dimasukkan: $successes'); window.location='jenama.php'</script>";
        } else {
            // If no rows were inserted, display an error message and redirect back to "jenama.php"
            echo "<script>alert('Pindah naik fail CSV GAGAL. Tiada baris berjaya dimasukkan.'); window.location='jenama.php'</script>";
        }
    }
} else {
    // If no file was selected, display an error message and redirect back to "import.php"
    echo "<script>alert('Sila memilih fail CSV untuk diimport'); window.location='import.php'</script>";
}
?>

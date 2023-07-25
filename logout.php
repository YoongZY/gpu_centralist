<?php
    session_start();
    session_destroy(); // End the whole user session
    header ("location:index.php"); // Head back to index.php for signin
?>

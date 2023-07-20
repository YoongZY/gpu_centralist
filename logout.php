<?php
    session_start();
    session_destroy(); // end whole user session
    header ("location:index.php"); // head to home
?>
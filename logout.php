<?php
    session_start();
    session_destroy(); // end whole user session
    header ("location:index1.php"); // head to home
?>
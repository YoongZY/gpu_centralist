<?php
$host="localhost";
$user="root";
$password="";
$database="gpu_centralist"; //Database file

//Variable connections
$connect = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()){    //conection success?
    echo"Proses sambung ke pangkalan data GAGAL";
    exit();
}else{}

//SETUP maklumat sistem
$namasys="GPU Centralist";
$web="GPU Centralist";
$motto="Web maklumat GPU";
?>
<!-- session_start(); -->
<html>
<?php include 'header.php'; ?>  <!-- call header -->

<div id="menu"> <!-- call menu -->
    <?php include 'menu2.php'; ?>
</div>

<div id="isi">
    <head>  <!-- papar ucapan -->
        <h2 style="text-align: center"> Selamat Datang <?php echo $_SESSION['nama']; ?> </h2>
    </head>
    <?php include 'welcome.php'; ?>
</div>
</html>
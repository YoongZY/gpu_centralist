<html>
    <?php include 'header.php'; ?>  <!-- Include the header file, which contains the common header elements -->

    <div id="menu"> <!-- Call menu -->
        <?php include 'menu2.php'; ?> <!-- Include the menu2.php file to load menu -->
    </div>

    <div id="isi">
        <head>  <!-- Display a welcome message with the user's name -->
            <h2 style="text-align: center"> Selamat Datang <?php echo $_SESSION['nama']; ?> </h2>
        </head>

        <?php include 'welcome.php'; ?> <!-- Include the welcome.php file to display additional content -->
    </div>
</html>

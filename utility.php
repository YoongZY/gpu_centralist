<!-- Link to an external css -->
<link rel="stylesheet" href="style.css">

<!-- Center-aligned buttons to change size and color -->
<center>
    <!-- Button to increase the font size -->
    <button onClick="zoomIn()"> +A </button>
    
    <!-- Button to decrease the font size -->
    <button onClick="zoomOut()"> -a </button>
    
    <!-- Button to toggle color mode -->
    <button id="color" onClick="toggleColorMode()"> WARNA </button>
</center>

<!-- Script section for color change functionality (currently hidden) -->
<script>
    // Function to toggle between light and dark color mode
    function toggleColorMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>

<!-- Script section for size change functionality -->
<script>
    // Variable to store the initial font size (1em)
    var fontSize = 1;
    
    // Function to increase font size
    function zoomIn() {
        fontSize += 0.1; // Increase the font size by 0.1em
        document.body.style.fontSize = fontSize + "em"; // Apply the new font size to the body element
    }
    
    // Function to decrease font size
    function zoomOut() {
        fontSize -= 0.1; // Decrease the font size by 0.1em
        document.body.style.fontSize = fontSize + "em"; // Apply the new font size to the body element
    }
</script>

<!-- Link to an external css -->
<link rel="stylesheet" href="style.css">

<!-- Center-aligned buttons to change size and color -->
<center>
    <!-- Button to increase the font size -->
    <button onClick="zoomIn()"> +A </button>
    
    <!-- Button to decrease the font size -->
    <button onClick="zoomOut()"> -a </button>
    
    <!-- Button to toggle color mode (hidden initially) -->
    <button id="color" onClick="toggleColorMode()" hidden> MODE </button>
</center>

<!-- Script section for color change functionality (currently hidden) -->
<script>
    // Function to toggle between light and dark color mode
    function toggleColorMode() {
        const currentColorMode = localStorage.getItem("colorMode");

        if (currentColorMode === "dark") {
            enableLightMode(); // Switch to light mode
        } else {
            enableDarkMode(); // Switch to dark mode
        }
    }

    // Function to enable light mode
    function enableLightMode() {
        // Remove "data-theme" attribute to disable dark mode
        document.documentElement.removeAttribute("data-theme");
        document.body.style.color = "var(--text-color)"; // Set text color to custom variable
        document.body.style.backgroundColor = "var(--bg-color)"; // Set background color to custom variable
        
        // Update table rows' background color to a custom variable
        const tableRows = document.querySelectorAll("table tr");
        tableRows.forEach(row => {
            row.style.backgroundColor = "var(--table-color)";
        });

        // Update menu background color to a custom variable
        const menu = document.getElementById("menu");
        menu.style.backgroundColor = "var(--menu-color)";

        localStorage.setItem("colorMode", "light"); // Store the current color mode in localStorage
    }

    // Function to enable dark mode
    function enableDarkMode() {
        // Add "data-theme" attribute to enable dark mode
        document.documentElement.setAttribute("data-theme", "dark");
        document.body.style.color = "var(--text-color)"; // Set text color to custom variable
        document.body.style.backgroundColor = "var(--bg-color)"; // Set background color to custom variable
        
        // Update table rows' background color to a custom variable
        const tableRows = document.querySelectorAll("table tr");
        tableRows.forEach(row => {
            row.style.backgroundColor = "var(--table-color)";
        });

        // Update menu background color to a custom variable
        const menu = document.getElementById("menu");
        menu.style.backgroundColor = "var(--menu-color)";

        localStorage.setItem("colorMode", "dark"); // Store the current color mode in localStorage
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

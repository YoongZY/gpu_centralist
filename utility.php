<!--butang tukar size & color -->
<link rel="stylesheet" href="style.css">
<center>
    <button onClick="zoomIn()"> +A </button>
    <button onClick="zoomOut()"> -a </button>
    <button id="color" onClick="toggleColorMode()" hidden> MODE </button>
</center>

<!-- color change -->
<script>
    // Toggle color mode
    function toggleColorMode() {
        const currentColorMode = localStorage.getItem("colorMode");

        if (currentColorMode === "dark") {
            enableLightMode();
        } else {
            enableDarkMode();
        }
    }

    // Enable light mode
    function enableLightMode() {
        document.documentElement.removeAttribute("data-theme");
        document.body.style.color = "var(--text-color)";
        document.body.style.backgroundColor = "var(--bg-color)";
        
        // Update table color
        const tableRows = document.querySelectorAll("table tr");
        tableRows.forEach(row => {
            row.style.backgroundColor = "var(--table-color)";
        });

        // Update menu color
        const menu = document.getElementById("menu");
        menu.style.backgroundColor = "var(--menu-color)";

        localStorage.setItem("colorMode", "light");
    }

    // Enable dark mode
    function enableDarkMode() {
        document.documentElement.setAttribute("data-theme", "dark");
        document.body.style.color = "var(--text-color)";
        document.body.style.backgroundColor = "var(--bg-color)";
        
        // Update table color
        const tableRows = document.querySelectorAll("table tr");
        tableRows.forEach(row => {
            row.style.backgroundColor = "var(--table-color)";
        });

        // Update menu color
        const menu = document.getElementById("menu");
        menu.style.backgroundColor = "var(--menu-color)";

        localStorage.setItem("colorMode", "dark");
    }
</script>

<!-- size change -->
<script>
    var fontSize = 1;
    function zoomIn(){
        fontSize += 0.1;
        document.body.style.fontSize = fontSize + "em";
    }
    function zoomOut(){
        fontSize -= 0.1;
        document.body.style.fontSize = fontSize + "em";
    }
</script>

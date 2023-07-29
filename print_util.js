function printDiv(divId) { // Declare a function named printDiv that takes a divId as a parameter
    // Get the inner HTML content of the specified div by its ID
    var printContents = document.getElementById(divId).innerHTML; 
    var originalContents = document.body.innerHTML; // Store the original HTML content of the entire document body

    // Replace the current document body content with the content of the specified div
    document.body.innerHTML = printContents; 

    setTimeout(function() { // Use setTimeout to delay the print action
        window.print(); // Open the browser's print dialog to print the current content
        document.body.innerHTML = originalContents; // Restore the original contents of the document body after printing
    }, 100); // The setTimeout function sets a delay of 100 milliseconds before printing to give time to load the page
}

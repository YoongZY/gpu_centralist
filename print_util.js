function printDiv(divId) {  //for div printing function
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    setTimeout(function() { //wait for div to load before printing
        window.print();
        document.body.innerHTML = originalContents; // Restore the original contents after printing
    }, 100);
}
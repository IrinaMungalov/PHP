<?   
    // DYNAMIC PAGE
    $temp = $_GET['temp'];

    // estimates
    $estimation = $temp >= 18 ? "Warm" : "Cold";

    // send data
    print($estimation);




// HW3: read about indexed and associative arrays
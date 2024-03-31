<!-- this scripts allows client to RATE a hotel -->
<style>
    body {background: #333; color: white;}
</style>
<?php

    $agg_rate_value = 4.5;
    $agg_rate_count = 10;

    if ( isset($_GET['rate']) ) {
        print("You've entered '{$_GET['rate']}'<br>");

        // $_GET['rate] -> string
        if( is_numeric($_GET['rate']) ) {            

            if( preg_match('/[0-4]\.\d/', $_GET['rate']) ) {

            $rate = (float) $_GET['rate']; // MAKE SURE THIS IS FLOAT !!!  
            // var_dump($rate); 
            $total_rate = $agg_rate_count * $agg_rate_value;    
            $total_rate += $rate;    

            $current_rate = $total_rate / ($agg_rate_count + 1);

            // Hw*2: print formated x.x
            print("You've rated this app with " . number_format($current_rate, 1));
            } else {
                print("Error: Only numbers between 0.0 and 5.0 are allowed!");
            }
        } else {
            print("Only numbers between 0.0 and 5.0 are allowed!");
        }
    } else {
        // Hw*2: print formated x.x
        print("This app was rated at " . number_format($agg_rate_value, 1) . " by " . number_format($agg_rate_count, 1) . " users");
    }
        
?>

<form action="/examples/validation.php" method="GET">

<input 
    type="text" 
    name="rate"
/>

<button>RATE</button>

</form>
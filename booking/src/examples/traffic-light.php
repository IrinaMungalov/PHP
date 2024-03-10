<style>
    .stopLight {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: block;
    }

    #red { 
        background-color: lightcoral; 
    }
    #yellow { 
        background-color: lightgoldenrodyellow; 
    }
    #green { 
        background-color: lightgreen; 
    }
</style>



<?php

$redColor = "";
$yellowColor = "";
$greenColor = "";

function getColor($activColor, $targetColor) {
    if ( $activColor === $targetColor ) {
        return "style=\"background-color: {$targetColor}\"";
    } 
}

if ( isset( $_GET['color'] ) ) {
    $activColor = $_GET['color'];
} else {
    $activColor = "";
}

switch ($activColor) {
    case "red":
        $redColor = 'style="background-color: red"';
        break;
    case "yellow":
        $yellowColor = 'style="background-color: yellow"';
        break;
    case "green":
        $greenColor = 'style="background-color: green"';
        break;
    default:
        break;
}

print '<a href="/examples/traffic-light.php?color=red" 
          id="red" 
          class="stopLight" ' . getColor($activColor, 'red') . '
        >
       </a>';

print '<a href="/examples/traffic-light.php?color=yellow" 
          id="yellow" 
          class="stopLight" ' . getColor($activColor, 'yellow') . '
        >
       </a>';

print '<a href="/examples/traffic-light.php?color=green" 
          id="green" 
          class="stopLight" ' . getColor($activColor, 'green') . '
        >
       </a>';


?>
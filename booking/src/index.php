<!-- LOGIC -->
<?
    const TICKET_PRICE = 100;
    
    if (array_key_exists('quantity', $_GET)) {
        
        $quantity = $_GET['quantity'];

        // HW1: make sure the value is INTEGER!!!
        if (ctype_digit($quantity)) {
            $cost = TICKET_PRICE * $quantity;
            $total = $cost;
        } else {
            $error = "Error: Quantity must be an integer!";
        }
        
    } else {
        $error = "You didn't specify any quantity!";
    }

// HINT: php function naming convention
//       type_action_param
//       type_param_action

?>

<!-- TEMPLATE -->
<a href="/?quantity=1">Buy 1 ticket</a><br>
<a href="/?quantity=2">Buy 2 tickets</a><br>
<a href="/?quantity=3">Buy 3 tickets</a><br>
<hr>
<form method="GET" action="/">
    <input type="text" name="quantity" placeholder="enter desired value...">
    <button>BUY</button>
</form>
<hr>

<? if (isset($total)) : ?>
    <div>
        <?= $quantity ?> tickets x <?= TICKET_PRICE?> = <?= $total ?>
    </div>
<? endif ?>
<? if (isset($error)) : ?>
    <div style="color: red";>
        <?= $error ?>
    </div>
<? endif ?>
    


    
   
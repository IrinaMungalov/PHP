<?
    $id = $_GET['id'] -1;
    $tours = load('tours');

    $client_full_name = $_POST['full_name'];
    $client_email = $_POST['email'];
    $client_phone_number = $_POST['phone_number'];

    $order_ticket_quantity = (int)$_POST['quantity'];
    

    $tour_name = $tours[$id]['name'];
    $tour_price = $tours[$id]['price']['amount'];
    $tour_currency = $tours[$id]['price']['currency'];

    $order = [
        "client" => [
            "full_name" => $client_full_name,
            "full_email" => $client_email,
            "phone_number" => $client_phone_number,
        ],
        "ticket_quantity" => $order_ticket_quantity,
        "tour_id" => $id + 1,
    ];
    save($order, "order");
?>

<!--
    HW2: show a success message to the client
         and print the total cost in this format:
            'Hot sands...': 2 tickets x 50 EUR = 100 EUR
-->

<hr>
<div>
    <h3>You have successfully booked the tour '<?= $tour_name ?>'</h3>
    <p>Total cost: <?= $order_ticket_quantity ?> ticket(s) x <?= $tour_price ?> <?= $tour_currency ?> =
                   <?= $order_ticket_quantity * $tour_price ?> <?= $tour_currency ?>
    </p>
</div>
<hr>
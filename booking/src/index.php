<!--  DATA BASE -->
<?
  // HW2: MAKE page title and seat price - constans
  //      confine to the naming conventions

  // HW3: format the total cost
  //      Total cost: 2 x 100.50 = 201.00

  define("PAGE_TITLE", "Booking confirmation");      // string

  define("SEAT_PRICE", 100.50);                      // float
   
  $book_client_vip = true;                           // boolean
  $book_adults = 3;                                  // int
  $book_cost = SEAT_PRICE * $book_adults;            // float   
?>


<!-- TEMPLATE / VIEW -->
<h1><?= PAGE_TITLE ?></h1>
<p>Adults: <?= $book_adults ?></p>
<p>Total cost: <?= $book_adults ?> x <?= number_format(SEAT_PRICE, 2) ?> = <?= number_format($book_cost, 2) ?></p>

<? if ($book_client_vip == true): ?>
  <p>VIP</p>
<? endif ?>

<a href="contacts.php">Contacts</a>




<!--

  HW1: create the page contacts.php
       declare 5-6 variables with contact data:
        - city, street, phone, email, geo coords, ...

       print the contact data - formatting it using ONLY HTML
      

-->
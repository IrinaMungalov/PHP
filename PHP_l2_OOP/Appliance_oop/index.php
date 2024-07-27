<?
    require_once 'src/TV.php';
    require_once 'src/DishWasher.php';
    require_once 'src/Money.php';
    require_once 'src/Length.php';
    require_once 'src/Volume.php';
    require_once 'src/Appliance.php';

    require_once 'src/Order.php';
    require_once 'src/Item.php';

    $tv = new TV (
        1000,
        'LG Extreme 55', 
        new \Length\Length(55,\Length\Units::INCH), 
        new Money(10000,Currency::MDL)
    );

      $washer = new DishWasher (
        1001,
        'Samsung DW-1',
        15,
        new \Volume\Volume(100,\Volume\Units::LITER),
        new Money(15000,Currency::MDL)
    );



    // client ordered 2 items // #15
    $order = new Order();     // ^   
    $order->addItem(new Item($tv,2));       // 2 x 10000
    $order->addItem(new Item($washer,1));   // 1 x 15000

    $tv->setPrice(new Money(10050, Currency::MDL));

    // go to payment
    var_dump($order);
    var_dump($tv);          // #1


















    


    

  


    

    


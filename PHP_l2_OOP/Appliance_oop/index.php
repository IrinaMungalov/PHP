<?
    require_once 'src/TV.php';
    require_once 'src/DishWasher.php';
    require_once 'src/Money.php';
    require_once 'src/Length.php';
    require_once 'src/Volume.php';
    require_once 'src/Appliance.php';
    


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


    var_dump($tv);   
    var_dump($washer);
    

    


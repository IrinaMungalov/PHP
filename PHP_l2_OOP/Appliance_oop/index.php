<?
    require_once 'src/TV.php';
    require_once 'src/Money.php';
    require_once 'src/Appliance.php';
    require_once 'src/Length.php';


    $tv = new TV(1,'Samsung', new Length(75,Units::INCH), new Money(1000_00,Currency::EUR));


    var_dump($tv);   
    

    

?>
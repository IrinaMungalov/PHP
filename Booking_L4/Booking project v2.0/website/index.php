<?
    

    require_once './src/bootstrap.php';

    use \Student\Booking\routes\Route;
    use \Student\Booking\routes\RouteParam;


    $route1 = new Route('/');
    $route2 = new Route('/contacts');

    $route3 = new RouteParam('/tour/{tour_id}');  // /tour/1
    $route4 = new RouteParam('/order/{order_id}/pay');
    
    var_dump($route3);
    // var_dump($route4);

    var_dump($route3->match('/notthat/1'));
    var_dump($route3->match('/tour/1'));
    var_dump($route4->match('/order/101/pay'));
<?
    

    require_once './src/bootstrap.php';

    use \Student\Booking\models\Tour;
    use \Student\Booking\models\Money;
    use \Student\Booking\models\Client;
    use \Student\Booking\models\Order;
    use \Student\Booking\models\OrderItem;
    
    $page = $_GET['page'] ?? 'home';
    
    $client = new Client('John Doe4', '', '+1234567', 04);
    $cost = new Money(400, 'EUR',4040);
    $order = new Order($client,$cost,444);
    $order->save();
    // $client = new Client('Pete Jackson2', '', '+1234567', 00000);
    // $cost = new Money(11000, 'EUR',900000);

    // $order = new Order($client, $cost, 19000);
    // $order->save();
    // $price->save();

    // $tours = Tour::getAll();
    // var_dump($tours);













    

    // if ($page === 'home') {

    //     $tours = Tour::getAll();
    //     $title = 'Our Fall Tours';
    //     renderPage($title, 'home', $tours);

    // } else if ($page === 'reviews') {

    //     $reviews = getAllReviews();
    //     $title = 'What people think';
    //     renderPage($title, 'reviews', $reviews);

    // } else if ($page === 'test') {
        
    //     $tour = new Tour(10,'Tour from ORM', 1000);
    //     $tour->save();

    // } else {

    //     renderPage('THE PAGE YOUR ARE LOOKING FOR WAS NOT FOUND!', '404');

    // }

    
    // if ($page === 'home') {

    //     $tours = getAllData('tours');
    //     $title = 'Our Fall Tours';
    //     renderPage($title, 'home', $tours);

    // } else if ($page === 'reviews') {

    //     $reviews = getAllData('reviews');
    //     $title = 'What people think';
    //     renderPage($title, 'reviews', $reviews);

    // } else {

    //     renderPage('THE PAGE YOUR ARE LOOKING FOR WAS NOT FOUND!', '404');

    // }

    // HW*: try to use switch/case

    // switch ($page) {
    //     case 'home':
    //         $tours = getAllData('tours');
    //         $title = 'Our Fall Tours';
    //         renderPage($title, 'home', $tours);
    //         break;

    //     case 'reviews':
    //         $reviews = getAllData('reviews');
    //         $title = 'What people think';
    //         renderPage($title, 'reviews', $reviews);
    //         break;

    //     default:
    //         renderPage('THE PAGE YOU ARE LOOKING FOR WAS NOT FOUND!', '404');
    //         break;
    // }


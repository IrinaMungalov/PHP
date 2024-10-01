<?
    

    require_once './src/bootstrap.php';

    use \Student\Booking\models\Tour;
    use \Student\Booking\models\Money;
    
    $page = $_GET['page'] ?? 'home';

    

    $tour = new Tour('Tour from ORM', new Money(1000,'USD',2), 10);
    $tour->save();
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


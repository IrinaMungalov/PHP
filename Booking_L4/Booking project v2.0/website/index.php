<?
    require_once './src/bootstrap.php';
    
    $page = $_GET['page'] ?? 'home';

    
    if ($page === 'home') {

        $tours = getAllData('tours');
        $title = 'Our Fall Tours';
        renderPage($title, 'home', $tours);

    } else if ($page === 'reviews') {

        $reviews = getAllData('reviews');
        $title = 'What people think';
        renderPage($title, 'reviews', $reviews);

    } else {

        renderPage('THE PAGE YOUR ARE LOOKING FOR WAS NOT FOUND!', '404');

    }

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

    

    
    

    

    


    

    

    

    
    
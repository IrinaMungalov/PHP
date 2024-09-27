<? 

    require_once './vendor/autoload.php';
    // initialozation  + configuration of main app parts
    use \Student\Booking\models\Model;
    
    require_once './src/view.php';

    // TWIG INIT + CONFIG
    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader, [
        // 'cache' => '/path/to/compilation_cache',
    ]);

    // DB INIT + CONFIG
    Model::$pdo = new PDO("mysql:host=booking_mariadb;dbname=booking;port=3306", "booking", "booking");
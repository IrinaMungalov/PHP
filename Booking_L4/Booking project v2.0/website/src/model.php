<?

    // HW2: try to apply DRY to the model functions
    function getAllData($table_name) {
        global $pdo;        
        $stmt = $pdo->query("SELECT * FROM {$table_name}");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    // function getAllTours () {
    //     global $pdo;        
    //     $stmt = $pdo->query('SELECT * FROM tours');
    //     $tours = $stmt->fetchAll(PDO::FETCH_ASSOC);         
    //     return $tours;
    // }

    // function getAllReviews () {
    //     global $pdo;
    //     $stmt = $pdo->query('SELECT * FROM reviews');
    //     $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $reviews;
    // }



    // ----------------- $stat ---------
    // 0. ....
    // 1. ....
    // 2. ....
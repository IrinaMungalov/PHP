<?
    function getAllTours () {
        global $pdo;        
        $stmt = $pdo->query('SELECT * FROM tours');
        $tours = $stmt->fetchAll(PDO::FETCH_ASSOC);         
        return $tours;
    }



    // ----------------- $stat ---------
    // 0. ....
    // 1. ....
    // 2. ....
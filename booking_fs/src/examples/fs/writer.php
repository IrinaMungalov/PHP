<?

    // ?name=John Doe&email=jd@examle.host&age=30
    
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = (int)$_GET['age'];               // HW2:  convert age to int                                  
        $active = ($_GET['active'] === 'true'); // HW3: get active (true/false) - boolean

        $client = [
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'active' => $active,
        ];

    // HW1: using array function copy only these 3 cells from the $_GET array -> $client_array
    // $client_array = array_intersect_key($_GET, array_flip( ['name', 'email', 'age', 'active'] )); 
        
        $file = fopen("./data/client.json", "w");
        fwrite($file, json_encode($client));
        fclose($file);

    

?>
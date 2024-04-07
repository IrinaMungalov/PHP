<?

    $client_array = array_intersect_key($_GET, array_flip( ['name', 'email', 'age', 'active'] ));

    $yaml = array_yaml($client_array);

    file_put_contents("./data/client.yaml", $yaml);

    function array_yaml($array)
        {
            $yaml = "client:";
            foreach ($array as $key => $value) {
                $yaml .= " $key: $value;";
            }
            return $yaml;
        }

?>
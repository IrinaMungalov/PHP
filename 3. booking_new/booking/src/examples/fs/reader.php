<?

    $yaml_data = file_get_contents("./data/client.yaml");

    $client_array = yaml_parse($yaml_data);

    var_dump($client_array);

?>
<?

    $xml = simplexml_load_file('./data/client.xml');
    $json = json_encode($xml);
    $client_array = json_decode($json, true);
    var_dump($client_array);

?>
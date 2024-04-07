<?

    $client_array = array_intersect_key($_GET, array_flip( ['name', 'email', 'age', 'active'] ));

    $xml = new SimpleXMLElement('<client></client>');

    foreach ($client_array as $key => $value) {
        $xml->addChild($key, $value);
    }

    $xml->asXML('./data/client.xml')

?>
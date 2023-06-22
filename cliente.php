<?php

try {
    $client = new SoapClient('http://localhost/webservice/servidor.php?wsdl');
    
    $response = $client->exemplo('Daniel', 32);
    
    echo $response;
} catch (SoapFault $e) {
    echo "Erro SOAP: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

?>

<?php

function exemplo($nome, $idade) {
    return $nome . ' -> ' . $idade;
}

$opcoes = array(
    'uri' => 'http://localhost/webservice/servidor.php'
);

$servidor = new SoapServer(null, $opcoes);
$servidor->addFunction('exemplo');
$servidor->handle();

?>

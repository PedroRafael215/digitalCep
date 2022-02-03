<?php
require_once "vendor/autoload.php";
use administrator\digitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('25610106');
print_r($resultado);
 
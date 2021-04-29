<?php

use Wsdl2PhpGenerator\Config;

require_once('vendor/autoload.php');

$serviceUrl = 'https://ws.pttavm.com:93/service.svc/service?wsdl';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new Config([
        'inputFile'     => $serviceUrl,
        'outputDir'     => 'pttavm',
        'namespaceName' => 'PttAVM'
    ])
);
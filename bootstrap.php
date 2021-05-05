<?php

use PttAVM\Service;
use PttAVM\ServiceHeader;

const APP_PATH = __DIR__;

require_once('vendor/autoload.php');

$serviceUrl = 'https://ws.pttavm.com:93/service.svc/service?wsdl';
$apiUser = '';
$apiPass = '';

$service = new Service(['trace' => 1], $serviceUrl);
$service->__setSoapHeaders([new ServiceHeader($apiUser, $apiPass)]);
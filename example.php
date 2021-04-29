<?php

use PttAVM\GetMainCategories;
use PttAVM\Service;
use PttAVM\ServiceHeader;

require_once('vendor/autoload.php');

$serviceUrl = 'https://ws.pttavm.com:93/service.svc/service?wsdl';
$apiUser = '';
$apiPass = '';

$service = new Service(['trace' => 1], $serviceUrl);
$service->__setSoapHeaders([new ServiceHeader($apiUser, $apiPass)]);

# Category List
try {
    $categoryList = $service->GetMainCategories(new GetMainCategories());
    if ($categoryList->getGetMainCategoriesResult()->getSuccess()) {
        foreach ($categoryList->getGetMainCategoriesResult()->getMain_category() as $category) {
            echo '#' . $category->getId() . ' | ' . $category->getName() . ' (' . $category->getUpdated_at()->format('Y-m-d H:i:s') . ')' . PHP_EOL;
        }
    } else {
        throw new Exception($categoryList->getGetMainCategoriesResult()->getError());
    }
} catch (Exception $e) {
    echo '!!! EXCEPTION !!!' . PHP_EOL;
    echo '#' . $e->getCode() . ' | ' . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString();
}
<?php

use PttAVM\GetMainCategories;
use PttAVM\Service;

require_once(__DIR__ . '/../bootstrap.php');

/** @var Service $service */
try {
    $categoryList = $service->GetMainCategories(new GetMainCategories());
    if ($categoryList->getGetMainCategoriesResult()->getSuccess()) {
        foreach ($categoryList->getGetMainCategoriesResult()->getMain_category() as $category) {
            echo '#' . $category->getId() . ' | ' . $category->getName() . ' (' . $category->getUpdated_at()->format('Y-m-d H:i:s') . ')' . PHP_EOL;
        }
    } else {
        /** @var \PttAVM\error $error */
        $error = $categoryList->getGetMainCategoriesResult()->getError();

        throw new Exception('#' . $error->getError_code() . ' ' . $error->getError_message());
    }
} catch (Exception $e) {
    echo '!!! EXCEPTION !!!' . PHP_EOL;
    echo '#' . $e->getCode() . ' | ' . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString();
}
<?php

use PttAVM\GetCategoryTree;
use PttAVM\Service;

require_once(__DIR__ . '/../bootstrap.php');

$parentId = 1; // Elektronik
$recursive = true;

/**
 * @param Service $service
 * @param int     $parentId
 * @param false   $recursive
 *
 * @return array
 * @throws Exception
 */
function getCategoryTree($service, $parentId, $recursive = false)
{
    $output = [];

    $categoryList = $service->GetCategoryTree(new GetCategoryTree($parentId, null));
    if ($categoryList->getGetCategoryTreeResult()->getSuccess()) {
        foreach ($categoryList->getGetCategoryTreeResult()->getCategory_tree() as $category) {
            $outputItem = [
                'id'   => $category->getId(),
                'name' => $category->getName()
            ];

            if ($recursive) {
                echo '#' . $parentId . ' > ' . $category->getId() . ' ' . $category->getName() . PHP_EOL;

                $categoryTree = getCategoryTree($service, $category->getId(), $recursive);
                if ($categoryTree) {
                    $outputItem['tree'] = $categoryTree;
                }
            }

            $output[] = $outputItem;
        }
    } else {
        /** @var \PttAVM\error $error */
        $error = $categoryList->getGetCategoryTreeResult()->getError();
        if ((int) $error->getError_code() !== 404) {
            throw new Exception('#' . $error->getError_code() . ' ' . $error->getError_message());
        }
    }

    return $output;
}

/** @var Service $service */
try {
    $categoryTree = getCategoryTree($service, $parentId, $recursive);

    $fileName = 'storage/categoryTree_' . $parentId . '.json';
    file_put_contents(APP_PATH . '/' . $fileName, json_encode($categoryTree));

    echo 'Kategori listesi ' . $fileName . ' içerisine aktarıldı.' . PHP_EOL;
} catch (Exception $e) {
    echo '!!! EXCEPTION !!!' . PHP_EOL;
    echo '#' . $e->getCode() . ' | ' . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString();
}
<?php

use PttAVM\ArrayOfUrunResim;
use PttAVM\KayitDurum;
use PttAVM\Service;
use PttAVM\StokGuncelleV2;
use PttAVM\StokUrun;
use PttAVM\UrunResim;

require_once(__DIR__ . '/../bootstrap.php');

$params = [
    'code'              => '',
    'stock_code'        => 'test-' . time(),
    'gtin'              => '123456789',
    'title'             => 'ürün adı',
    'subtitle'          => 'alt başlık',
    'sizes'             => [
        'weight' => 100,
        'x'      => 1,
        'y'      => 1,
        'z'      => 1,
        'desi'   => 10
    ],
    'status'            => 1,
    'available'         => 1,
    'quantity'          => 100,
    'category_id'       => 24, // Elektronik > Dizüstü Bilgisayarlar
    'barcode'           => time(),
    'warranty_time'     => '24',
    'warranty_company'  => 'Distribütor',
    'discount'          => 10, // yüzde
    'tax_rate'          => 18, // yüzde
    'price'             => 118,
    'price_without_tax' => 100,
    'tags'              => 'etiket1, etiket2',
    'description'       => 'Ürün <strong>Açıklaması</strong>',
    'images'            => [
        [
            'order' => 1,
            'url'   => 'https://i.ytimg.com/vi/t8DFDe0HQpA/hqdefault.jpg'
        ]
    ]
];

$item = new StokUrun();
$item->setDurum($params['code'] ? KayitDurum::Mevcut : KayitDurum::Yeni);
$item->setYeniKategoriId($params['category_id']);
$item->setUrunAdi($params['title']);
$item->setAciklama($params['subtitle']);
$item->setAgirlik($params['sizes']['weight']);
$item->setAktif($params['status']);
$item->setBarkod($params['barcode']);
$item->setBoyX($params['sizes']['x']);
$item->setBoyY($params['sizes']['y']);
$item->setBoyZ($params['sizes']['z']);
$item->setDesi($params['sizes']['desi']);
$item->setGtin($params['gtin']);
$item->setGarantiSuresi($params['warranty_time']);
$item->setGarantiVerenFirma($params['warranty_company']);
$item->setIskonto($params['discount']);
$item->setKDVOran($params['tax_rate']);
$item->setKDVli($params['price']);
$item->setKDVsiz($params['price_without_tax']);
$item->setMevcut($params['available']);
$item->setMiktar($params['quantity']);
$item->setTag($params['tags']);
$item->setUrunId($params['code']);
$item->setUrunKodu($params['stock_code']);
$item->setUzunAciklama($params['description']);

if ($params['images']) {
    $urunResim = [];
    foreach ($params['images'] as $image) {
        $urunResim[] = (new UrunResim())->setSira($image['order'])->setUrl($image['url']);
    }
    $item->setUrunResimleri((new ArrayOfUrunResim())->setUrunResim($urunResim));
}

/*$UrunResimleriBase64[] = (new ArrayOfUrunResimBase64())->setUrunResimBase64(
    (new UrunResimBase64())->setSira(1)->setBase64String('xvc')->setFileExtention('jpg')
);
$item->setUrunResimleriBase64($UrunResimleriBase64);*/

/** @var Service $service */
$stokGuncelleV2 = $service->StokGuncelleV2(new StokGuncelleV2($item));

if ($stokGuncelleV2->getStokGuncelleV2Result()->getSuccess()) {
    echo '#' . $stokGuncelleV2->getStokGuncelleV2Result()->getUrunId() . PHP_EOL;

    # Warning Messages
    $warningMessages = $stokGuncelleV2->getStokGuncelleV2Result()->getWarningMessages();
    if ($warningMessages->getString()) {
        echo str_repeat('=', 10) . 'UYARI MESAJLARI' . str_repeat('=', 10) . PHP_EOL;
        foreach ($warningMessages as $warningMessage) {
            echo $warningMessage . PHP_EOL;
        }
    }
} else {
    echo 'HATA! ' . $stokGuncelleV2->getStokGuncelleV2Result()->getErrorMessage() . PHP_EOL;
}
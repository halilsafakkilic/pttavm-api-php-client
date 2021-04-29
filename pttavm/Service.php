<?php

namespace PttAVM;

class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfint' => 'PttAVM\\ArrayOfint',
      'ArrayOfstring' => 'PttAVM\\ArrayOfstring',
      'Tedarikci' => 'PttAVM\\Tedarikci',
      'ArrayOfStokKontrolDetay' => 'PttAVM\\ArrayOfStokKontrolDetay',
      'StokKontrolDetay' => 'PttAVM\\StokKontrolDetay',
      'ArrayOfUrunResim' => 'PttAVM\\ArrayOfUrunResim',
      'UrunResim' => 'PttAVM\\UrunResim',
      'ArrayOfVariants' => 'PttAVM\\ArrayOfVariants',
      'Variants' => 'PttAVM\\Variants',
      'ArrayOfKategoriDetay' => 'PttAVM\\ArrayOfKategoriDetay',
      'KategoriDetay' => 'PttAVM\\KategoriDetay',
      'ArrayOfAltKategoriDetay' => 'PttAVM\\ArrayOfAltKategoriDetay',
      'AltKategoriDetay' => 'PttAVM\\AltKategoriDetay',
      'ArrayOfKargoBilgi' => 'PttAVM\\ArrayOfKargoBilgi',
      'KargoBilgi' => 'PttAVM\\KargoBilgi',
      'ArrayOfTedarikciSiparisKontrol' => 'PttAVM\\ArrayOfTedarikciSiparisKontrol',
      'TedarikciSiparisKontrol' => 'PttAVM\\TedarikciSiparisKontrol',
      'ArrayOfTedarikciSiparisKontrolV2' => 'PttAVM\\ArrayOfTedarikciSiparisKontrolV2',
      'TedarikciSiparisKontrolV2' => 'PttAVM\\TedarikciSiparisKontrolV2',
      'ArrayOfSiparisUrun' => 'PttAVM\\ArrayOfSiparisUrun',
      'SiparisUrun' => 'PttAVM\\SiparisUrun',
      'ArrayOfclsResultTransferObject' => 'PttAVM\\ArrayOfclsResultTransferObject',
      'clsResultTransferObject' => 'PttAVM\\clsResultTransferObject',
      'ArrayOfStokUrun' => 'PttAVM\\ArrayOfStokUrun',
      'StokUrun' => 'PttAVM\\StokUrun',
      'ArrayOfUrunResimBase64' => 'PttAVM\\ArrayOfUrunResimBase64',
      'UrunResimBase64' => 'PttAVM\\UrunResimBase64',
      'ArrayOfVariant' => 'PttAVM\\ArrayOfVariant',
      'Variant' => 'PttAVM\\Variant',
      'ArrayOfVariantAttr' => 'PttAVM\\ArrayOfVariantAttr',
      'VariantAttr' => 'PttAVM\\VariantAttr',
      'ArrayOfVariantCombination' => 'PttAVM\\ArrayOfVariantCombination',
      'VariantCombination' => 'PttAVM\\VariantCombination',
      'StokResult' => 'PttAVM\\StokResult',
      'AktifUrunRequest' => 'PttAVM\\AktifUrunRequest',
      'ApiResult' => 'PttAVM\\ApiResult',
      'categoryMainResponse' => 'PttAVM\\categoryMainResponse',
      'ArrayOfcategory' => 'PttAVM\\ArrayOfcategory',
      'category' => 'PttAVM\\category',
      'error' => 'PttAVM\\error',
      'categoryResponse' => 'PttAVM\\categoryResponse',
      'category_detail' => 'PttAVM\\category_detail',
      'categoryResponseTree' => 'PttAVM\\categoryResponseTree',
      'ArrayOfCategory' => 'PttAVM\\ArrayOfCategory',
      'Category' => 'PttAVM\\Category',
      'ServiceStateResult' => 'PttAVM\\ServiceStateResult',
      'KullaniciTedarikciBilgisiGetir' => 'PttAVM\\KullaniciTedarikciBilgisiGetir',
      'KullaniciTedarikciBilgisiGetirResponse' => 'PttAVM\\KullaniciTedarikciBilgisiGetirResponse',
      'StokKontrolListesi' => 'PttAVM\\StokKontrolListesi',
      'StokKontrolListesiResponse' => 'PttAVM\\StokKontrolListesiResponse',
      'BarkodKontrol' => 'PttAVM\\BarkodKontrol',
      'BarkodKontrolResponse' => 'PttAVM\\BarkodKontrolResponse',
      'KategoriListesi' => 'PttAVM\\KategoriListesi',
      'KategoriListesiResponse' => 'PttAVM\\KategoriListesiResponse',
      'AltKategoriListesi' => 'PttAVM\\AltKategoriListesi',
      'AltKategoriListesiResponse' => 'PttAVM\\AltKategoriListesiResponse',
      'KargoBilgiListesi' => 'PttAVM\\KargoBilgiListesi',
      'KargoBilgiListesiResponse' => 'PttAVM\\KargoBilgiListesiResponse',
      'StokGuncelle' => 'PttAVM\\StokGuncelle',
      'StokGuncelleResponse' => 'PttAVM\\StokGuncelleResponse',
      'StokFiyatGuncelle' => 'PttAVM\\StokFiyatGuncelle',
      'StokFiyatGuncelleResponse' => 'PttAVM\\StokFiyatGuncelleResponse',
      'StokFiyatGuncelle2' => 'PttAVM\\StokFiyatGuncelle2',
      'StokFiyatGuncelle2Response' => 'PttAVM\\StokFiyatGuncelle2Response',
      'SiparisKontrolListesi' => 'PttAVM\\SiparisKontrolListesi',
      'SiparisKontrolListesiResponse' => 'PttAVM\\SiparisKontrolListesiResponse',
      'TedarikciAltKategoriListesi' => 'PttAVM\\TedarikciAltKategoriListesi',
      'TedarikciAltKategoriListesiResponse' => 'PttAVM\\TedarikciAltKategoriListesiResponse',
      'GetVersion' => 'PttAVM\\GetVersion',
      'GetVersionResponse' => 'PttAVM\\GetVersionResponse',
      'SiparisKontrolListesiV2' => 'PttAVM\\SiparisKontrolListesiV2',
      'SiparisKontrolListesiV2Response' => 'PttAVM\\SiparisKontrolListesiV2Response',
      'OlmayanUrunAdetleriSifirla' => 'PttAVM\\OlmayanUrunAdetleriSifirla',
      'OlmayanUrunAdetleriSifirlaResponse' => 'PttAVM\\OlmayanUrunAdetleriSifirlaResponse',
      'StokGuncelleBulk' => 'PttAVM\\StokGuncelleBulk',
      'StokGuncelleBulkResponse' => 'PttAVM\\StokGuncelleBulkResponse',
      'StokGuncelleV2Bulk' => 'PttAVM\\StokGuncelleV2Bulk',
      'StokGuncelleV2BulkResponse' => 'PttAVM\\StokGuncelleV2BulkResponse',
      'StokFiyatGuncelleBulk' => 'PttAVM\\StokFiyatGuncelleBulk',
      'StokFiyatGuncelleBulkResponse' => 'PttAVM\\StokFiyatGuncelleBulkResponse',
      'BarkodKontrolBulk' => 'PttAVM\\BarkodKontrolBulk',
      'BarkodKontrolBulkResponse' => 'PttAVM\\BarkodKontrolBulkResponse',
      'StokFiyatGuncelle3' => 'PttAVM\\StokFiyatGuncelle3',
      'StokFiyatGuncelle3Response' => 'PttAVM\\StokFiyatGuncelle3Response',
      'StokGuncelleV2' => 'PttAVM\\StokGuncelleV2',
      'StokGuncelleV2Response' => 'PttAVM\\StokGuncelleV2Response',
      'AktifYap' => 'PttAVM\\AktifYap',
      'AktifYapResponse' => 'PttAVM\\AktifYapResponse',
      'ServiceState' => 'PttAVM\\ServiceState',
      'ServiceStateResponse' => 'PttAVM\\ServiceStateResponse',
      'StokGuncelleTestApi' => 'PttAVM\\StokGuncelleTestApi',
      'StokGuncelleTestApiResponse' => 'PttAVM\\StokGuncelleTestApiResponse',
      'GetMainCategories' => 'PttAVM\\GetMainCategories',
      'GetMainCategoriesResponse' => 'PttAVM\\GetMainCategoriesResponse',
      'GetCategory' => 'PttAVM\\GetCategory',
      'GetCategoryResponse' => 'PttAVM\\GetCategoryResponse',
      'GetCategoryTree' => 'PttAVM\\GetCategoryTree',
      'GetCategoryTreeResponse' => 'PttAVM\\GetCategoryTreeResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ws.pttavm.com:93/service.svc/service?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param KullaniciTedarikciBilgisiGetir $parameters
     * @return KullaniciTedarikciBilgisiGetirResponse
     */
    public function KullaniciTedarikciBilgisiGetir(KullaniciTedarikciBilgisiGetir $parameters)
    {
      return $this->__soapCall('KullaniciTedarikciBilgisiGetir', array($parameters));
    }

    /**
     * @param StokKontrolListesi $parameters
     * @return StokKontrolListesiResponse
     */
    public function StokKontrolListesi(StokKontrolListesi $parameters)
    {
      return $this->__soapCall('StokKontrolListesi', array($parameters));
    }

    /**
     * @param BarkodKontrol $parameters
     * @return BarkodKontrolResponse
     */
    public function BarkodKontrol(BarkodKontrol $parameters)
    {
      return $this->__soapCall('BarkodKontrol', array($parameters));
    }

    /**
     * @param KategoriListesi $parameters
     * @return KategoriListesiResponse
     */
    public function KategoriListesi(KategoriListesi $parameters)
    {
      return $this->__soapCall('KategoriListesi', array($parameters));
    }

    /**
     * @param AltKategoriListesi $parameters
     * @return AltKategoriListesiResponse
     */
    public function AltKategoriListesi(AltKategoriListesi $parameters)
    {
      return $this->__soapCall('AltKategoriListesi', array($parameters));
    }

    /**
     * @param KargoBilgiListesi $parameters
     * @return KargoBilgiListesiResponse
     */
    public function KargoBilgiListesi(KargoBilgiListesi $parameters)
    {
      return $this->__soapCall('KargoBilgiListesi', array($parameters));
    }

    /**
     * @param StokGuncelle $parameters
     * @return StokGuncelleResponse
     */
    public function StokGuncelle(StokGuncelle $parameters)
    {
      return $this->__soapCall('StokGuncelle', array($parameters));
    }

    /**
     * @param StokFiyatGuncelle $parameters
     * @return StokFiyatGuncelleResponse
     */
    public function StokFiyatGuncelle(StokFiyatGuncelle $parameters)
    {
      return $this->__soapCall('StokFiyatGuncelle', array($parameters));
    }

    /**
     * @param StokFiyatGuncelle2 $parameters
     * @return StokFiyatGuncelle2Response
     */
    public function StokFiyatGuncelle2(StokFiyatGuncelle2 $parameters)
    {
      return $this->__soapCall('StokFiyatGuncelle2', array($parameters));
    }

    /**
     * @param SiparisKontrolListesi $parameters
     * @return SiparisKontrolListesiResponse
     */
    public function SiparisKontrolListesi(SiparisKontrolListesi $parameters)
    {
      return $this->__soapCall('SiparisKontrolListesi', array($parameters));
    }

    /**
     * @param TedarikciAltKategoriListesi $parameters
     * @return TedarikciAltKategoriListesiResponse
     */
    public function TedarikciAltKategoriListesi(TedarikciAltKategoriListesi $parameters)
    {
      return $this->__soapCall('TedarikciAltKategoriListesi', array($parameters));
    }

    /**
     * @param GetVersion $parameters
     * @return GetVersionResponse
     */
    public function GetVersion(GetVersion $parameters)
    {
      return $this->__soapCall('GetVersion', array($parameters));
    }

    /**
     * @param SiparisKontrolListesiV2 $parameters
     * @return SiparisKontrolListesiV2Response
     */
    public function SiparisKontrolListesiV2(SiparisKontrolListesiV2 $parameters)
    {
      return $this->__soapCall('SiparisKontrolListesiV2', array($parameters));
    }

    /**
     * @param OlmayanUrunAdetleriSifirla $parameters
     * @return OlmayanUrunAdetleriSifirlaResponse
     */
    public function OlmayanUrunAdetleriSifirla(OlmayanUrunAdetleriSifirla $parameters)
    {
      return $this->__soapCall('OlmayanUrunAdetleriSifirla', array($parameters));
    }

    /**
     * @param StokGuncelleBulk $parameters
     * @return StokGuncelleBulkResponse
     */
    public function StokGuncelleBulk(StokGuncelleBulk $parameters)
    {
      return $this->__soapCall('StokGuncelleBulk', array($parameters));
    }

    /**
     * @param StokGuncelleV2Bulk $parameters
     * @return StokGuncelleV2BulkResponse
     */
    public function StokGuncelleV2Bulk(StokGuncelleV2Bulk $parameters)
    {
      return $this->__soapCall('StokGuncelleV2Bulk', array($parameters));
    }

    /**
     * @param StokFiyatGuncelleBulk $parameters
     * @return StokFiyatGuncelleBulkResponse
     */
    public function StokFiyatGuncelleBulk(StokFiyatGuncelleBulk $parameters)
    {
      return $this->__soapCall('StokFiyatGuncelleBulk', array($parameters));
    }

    /**
     * @param BarkodKontrolBulk $parameters
     * @return BarkodKontrolBulkResponse
     */
    public function BarkodKontrolBulk(BarkodKontrolBulk $parameters)
    {
      return $this->__soapCall('BarkodKontrolBulk', array($parameters));
    }

    /**
     * @param StokFiyatGuncelle3 $parameters
     * @return StokFiyatGuncelle3Response
     */
    public function StokFiyatGuncelle3(StokFiyatGuncelle3 $parameters)
    {
      return $this->__soapCall('StokFiyatGuncelle3', array($parameters));
    }

    /**
     * @param StokGuncelleV2 $parameters
     * @return StokGuncelleV2Response
     */
    public function StokGuncelleV2(StokGuncelleV2 $parameters)
    {
      return $this->__soapCall('StokGuncelleV2', array($parameters));
    }

    /**
     * @param AktifYap $parameters
     * @return AktifYapResponse
     */
    public function AktifYap(AktifYap $parameters)
    {
      return $this->__soapCall('AktifYap', array($parameters));
    }

    /**
     * @param ServiceState $parameters
     * @return ServiceStateResponse
     */
    public function ServiceState(ServiceState $parameters)
    {
      return $this->__soapCall('ServiceState', array($parameters));
    }

    /**
     * @param StokGuncelleTestApi $parameters
     * @return StokGuncelleTestApiResponse
     */
    public function StokGuncelleTestApi(StokGuncelleTestApi $parameters)
    {
      return $this->__soapCall('StokGuncelleTestApi', array($parameters));
    }

    /**
     * @param GetMainCategories $parameters
     * @return GetMainCategoriesResponse
     */
    public function GetMainCategories(GetMainCategories $parameters)
    {
      return $this->__soapCall('GetMainCategories', array($parameters));
    }

    /**
     * @param GetCategory $parameters
     * @return GetCategoryResponse
     */
    public function GetCategory(GetCategory $parameters)
    {
      return $this->__soapCall('GetCategory', array($parameters));
    }

    /**
     * @param GetCategoryTree $parameters
     * @return GetCategoryTreeResponse
     */
    public function GetCategoryTree(GetCategoryTree $parameters)
    {
      return $this->__soapCall('GetCategoryTree', array($parameters));
    }

}

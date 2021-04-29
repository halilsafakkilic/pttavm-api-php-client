<?php

namespace PttAVM;

class StokKontrolDetay
{

    /**
     * @var string $Aciklama
     */
    protected $Aciklama = null;

    /**
     * @var string $AdminCode
     */
    protected $AdminCode = null;

    /**
     * @var float $Agirlik
     */
    protected $Agirlik = null;

    /**
     * @var boolean $Aktif
     */
    protected $Aktif = null;

    /**
     * @var string $AltKategoriAdi
     */
    protected $AltKategoriAdi = null;

    /**
     * @var int $AltKategoriId
     */
    protected $AltKategoriId = null;

    /**
     * @var int $AnaKategoriId
     */
    protected $AnaKategoriId = null;

    /**
     * @var string $Barkod
     */
    protected $Barkod = null;

    /**
     * @var int $BoyX
     */
    protected $BoyX = null;

    /**
     * @var int $BoyY
     */
    protected $BoyY = null;

    /**
     * @var int $BoyZ
     */
    protected $BoyZ = null;

    /**
     * @var float $Desi
     */
    protected $Desi = null;

    /**
     * @var KayitDurum $Durum
     */
    protected $Durum = null;

    /**
     * @var int $GarantiSuresi
     */
    protected $GarantiSuresi = null;

    /**
     * @var string $GarantiVerenFirma
     */
    protected $GarantiVerenFirma = null;

    /**
     * @var float $Iskonto
     */
    protected $Iskonto = null;

    /**
     * @var float $KDVOran
     */
    protected $KDVOran = null;

    /**
     * @var float $KDVli
     */
    protected $KDVli = null;

    /**
     * @var float $KDVsiz
     */
    protected $KDVsiz = null;

    /**
     * @var int $KategoriBilgisiGuncelle
     */
    protected $KategoriBilgisiGuncelle = null;

    /**
     * @var boolean $Mevcut
     */
    protected $Mevcut = null;

    /**
     * @var int $Miktar
     */
    protected $Miktar = null;

    /**
     * @var base64Binary $Resim1Stream
     */
    protected $Resim1Stream = null;

    /**
     * @var string $Resim1Url
     */
    protected $Resim1Url = null;

    /**
     * @var base64Binary $Resim2Stream
     */
    protected $Resim2Stream = null;

    /**
     * @var string $Resim2Url
     */
    protected $Resim2Url = null;

    /**
     * @var base64Binary $Resim3Stream
     */
    protected $Resim3Stream = null;

    /**
     * @var string $Resim3Url
     */
    protected $Resim3Url = null;

    /**
     * @var ArrayOfUrunResim $ResimListesi
     */
    protected $ResimListesi = null;

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    /**
     * @var string $Tag
     */
    protected $Tag = null;

    /**
     * @var string $TedarikciAltKategoriAdi
     */
    protected $TedarikciAltKategoriAdi = null;

    /**
     * @var int $TedarikciAltKategoriId
     */
    protected $TedarikciAltKategoriId = null;

    /**
     * @var int $TedarikciSanalKategoriId
     */
    protected $TedarikciSanalKategoriId = null;

    /**
     * @var string $UrunAdi
     */
    protected $UrunAdi = null;

    /**
     * @var int $UrunId
     */
    protected $UrunId = null;

    /**
     * @var string $UrunKodu
     */
    protected $UrunKodu = null;

    /**
     * @var string $UrunUrl
     */
    protected $UrunUrl = null;

    /**
     * @var string $UzunAciklama
     */
    protected $UzunAciklama = null;

    /**
     * @var ArrayOfVariants $VariantListesi
     */
    protected $VariantListesi = null;

    /**
     * @var string $YeniKategoriId
     */
    protected $YeniKategoriId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAciklama()
    {
      return $this->Aciklama;
    }

    /**
     * @param string $Aciklama
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAciklama($Aciklama)
    {
      $this->Aciklama = $Aciklama;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdminCode()
    {
      return $this->AdminCode;
    }

    /**
     * @param string $AdminCode
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAdminCode($AdminCode)
    {
      $this->AdminCode = $AdminCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getAgirlik()
    {
      return $this->Agirlik;
    }

    /**
     * @param float $Agirlik
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAgirlik($Agirlik)
    {
      $this->Agirlik = $Agirlik;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAktif()
    {
      return $this->Aktif;
    }

    /**
     * @param boolean $Aktif
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAktif($Aktif)
    {
      $this->Aktif = $Aktif;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltKategoriAdi()
    {
      return $this->AltKategoriAdi;
    }

    /**
     * @param string $AltKategoriAdi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAltKategoriAdi($AltKategoriAdi)
    {
      $this->AltKategoriAdi = $AltKategoriAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getAltKategoriId()
    {
      return $this->AltKategoriId;
    }

    /**
     * @param int $AltKategoriId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAltKategoriId($AltKategoriId)
    {
      $this->AltKategoriId = $AltKategoriId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAnaKategoriId()
    {
      return $this->AnaKategoriId;
    }

    /**
     * @param int $AnaKategoriId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setAnaKategoriId($AnaKategoriId)
    {
      $this->AnaKategoriId = $AnaKategoriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarkod()
    {
      return $this->Barkod;
    }

    /**
     * @param string $Barkod
     * @return \PttAVM\StokKontrolDetay
     */
    public function setBarkod($Barkod)
    {
      $this->Barkod = $Barkod;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoyX()
    {
      return $this->BoyX;
    }

    /**
     * @param int $BoyX
     * @return \PttAVM\StokKontrolDetay
     */
    public function setBoyX($BoyX)
    {
      $this->BoyX = $BoyX;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoyY()
    {
      return $this->BoyY;
    }

    /**
     * @param int $BoyY
     * @return \PttAVM\StokKontrolDetay
     */
    public function setBoyY($BoyY)
    {
      $this->BoyY = $BoyY;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoyZ()
    {
      return $this->BoyZ;
    }

    /**
     * @param int $BoyZ
     * @return \PttAVM\StokKontrolDetay
     */
    public function setBoyZ($BoyZ)
    {
      $this->BoyZ = $BoyZ;
      return $this;
    }

    /**
     * @return float
     */
    public function getDesi()
    {
      return $this->Desi;
    }

    /**
     * @param float $Desi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setDesi($Desi)
    {
      $this->Desi = $Desi;
      return $this;
    }

    /**
     * @return KayitDurum
     */
    public function getDurum()
    {
      return $this->Durum;
    }

    /**
     * @param KayitDurum $Durum
     * @return \PttAVM\StokKontrolDetay
     */
    public function setDurum($Durum)
    {
      $this->Durum = $Durum;
      return $this;
    }

    /**
     * @return int
     */
    public function getGarantiSuresi()
    {
      return $this->GarantiSuresi;
    }

    /**
     * @param int $GarantiSuresi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setGarantiSuresi($GarantiSuresi)
    {
      $this->GarantiSuresi = $GarantiSuresi;
      return $this;
    }

    /**
     * @return string
     */
    public function getGarantiVerenFirma()
    {
      return $this->GarantiVerenFirma;
    }

    /**
     * @param string $GarantiVerenFirma
     * @return \PttAVM\StokKontrolDetay
     */
    public function setGarantiVerenFirma($GarantiVerenFirma)
    {
      $this->GarantiVerenFirma = $GarantiVerenFirma;
      return $this;
    }

    /**
     * @return float
     */
    public function getIskonto()
    {
      return $this->Iskonto;
    }

    /**
     * @param float $Iskonto
     * @return \PttAVM\StokKontrolDetay
     */
    public function setIskonto($Iskonto)
    {
      $this->Iskonto = $Iskonto;
      return $this;
    }

    /**
     * @return float
     */
    public function getKDVOran()
    {
      return $this->KDVOran;
    }

    /**
     * @param float $KDVOran
     * @return \PttAVM\StokKontrolDetay
     */
    public function setKDVOran($KDVOran)
    {
      $this->KDVOran = $KDVOran;
      return $this;
    }

    /**
     * @return float
     */
    public function getKDVli()
    {
      return $this->KDVli;
    }

    /**
     * @param float $KDVli
     * @return \PttAVM\StokKontrolDetay
     */
    public function setKDVli($KDVli)
    {
      $this->KDVli = $KDVli;
      return $this;
    }

    /**
     * @return float
     */
    public function getKDVsiz()
    {
      return $this->KDVsiz;
    }

    /**
     * @param float $KDVsiz
     * @return \PttAVM\StokKontrolDetay
     */
    public function setKDVsiz($KDVsiz)
    {
      $this->KDVsiz = $KDVsiz;
      return $this;
    }

    /**
     * @return int
     */
    public function getKategoriBilgisiGuncelle()
    {
      return $this->KategoriBilgisiGuncelle;
    }

    /**
     * @param int $KategoriBilgisiGuncelle
     * @return \PttAVM\StokKontrolDetay
     */
    public function setKategoriBilgisiGuncelle($KategoriBilgisiGuncelle)
    {
      $this->KategoriBilgisiGuncelle = $KategoriBilgisiGuncelle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMevcut()
    {
      return $this->Mevcut;
    }

    /**
     * @param boolean $Mevcut
     * @return \PttAVM\StokKontrolDetay
     */
    public function setMevcut($Mevcut)
    {
      $this->Mevcut = $Mevcut;
      return $this;
    }

    /**
     * @return int
     */
    public function getMiktar()
    {
      return $this->Miktar;
    }

    /**
     * @param int $Miktar
     * @return \PttAVM\StokKontrolDetay
     */
    public function setMiktar($Miktar)
    {
      $this->Miktar = $Miktar;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getResim1Stream()
    {
      return $this->Resim1Stream;
    }

    /**
     * @param base64Binary $Resim1Stream
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim1Stream($Resim1Stream)
    {
      $this->Resim1Stream = $Resim1Stream;
      return $this;
    }

    /**
     * @return string
     */
    public function getResim1Url()
    {
      return $this->Resim1Url;
    }

    /**
     * @param string $Resim1Url
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim1Url($Resim1Url)
    {
      $this->Resim1Url = $Resim1Url;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getResim2Stream()
    {
      return $this->Resim2Stream;
    }

    /**
     * @param base64Binary $Resim2Stream
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim2Stream($Resim2Stream)
    {
      $this->Resim2Stream = $Resim2Stream;
      return $this;
    }

    /**
     * @return string
     */
    public function getResim2Url()
    {
      return $this->Resim2Url;
    }

    /**
     * @param string $Resim2Url
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim2Url($Resim2Url)
    {
      $this->Resim2Url = $Resim2Url;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getResim3Stream()
    {
      return $this->Resim3Stream;
    }

    /**
     * @param base64Binary $Resim3Stream
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim3Stream($Resim3Stream)
    {
      $this->Resim3Stream = $Resim3Stream;
      return $this;
    }

    /**
     * @return string
     */
    public function getResim3Url()
    {
      return $this->Resim3Url;
    }

    /**
     * @param string $Resim3Url
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResim3Url($Resim3Url)
    {
      $this->Resim3Url = $Resim3Url;
      return $this;
    }

    /**
     * @return ArrayOfUrunResim
     */
    public function getResimListesi()
    {
      return $this->ResimListesi;
    }

    /**
     * @param ArrayOfUrunResim $ResimListesi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setResimListesi($ResimListesi)
    {
      $this->ResimListesi = $ResimListesi;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param int $ShopId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->Tag;
    }

    /**
     * @param string $Tag
     * @return \PttAVM\StokKontrolDetay
     */
    public function setTag($Tag)
    {
      $this->Tag = $Tag;
      return $this;
    }

    /**
     * @return string
     */
    public function getTedarikciAltKategoriAdi()
    {
      return $this->TedarikciAltKategoriAdi;
    }

    /**
     * @param string $TedarikciAltKategoriAdi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setTedarikciAltKategoriAdi($TedarikciAltKategoriAdi)
    {
      $this->TedarikciAltKategoriAdi = $TedarikciAltKategoriAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getTedarikciAltKategoriId()
    {
      return $this->TedarikciAltKategoriId;
    }

    /**
     * @param int $TedarikciAltKategoriId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setTedarikciAltKategoriId($TedarikciAltKategoriId)
    {
      $this->TedarikciAltKategoriId = $TedarikciAltKategoriId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTedarikciSanalKategoriId()
    {
      return $this->TedarikciSanalKategoriId;
    }

    /**
     * @param int $TedarikciSanalKategoriId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setTedarikciSanalKategoriId($TedarikciSanalKategoriId)
    {
      $this->TedarikciSanalKategoriId = $TedarikciSanalKategoriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunAdi()
    {
      return $this->UrunAdi;
    }

    /**
     * @param string $UrunAdi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setUrunAdi($UrunAdi)
    {
      $this->UrunAdi = $UrunAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getUrunId()
    {
      return $this->UrunId;
    }

    /**
     * @param int $UrunId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setUrunId($UrunId)
    {
      $this->UrunId = $UrunId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunKodu()
    {
      return $this->UrunKodu;
    }

    /**
     * @param string $UrunKodu
     * @return \PttAVM\StokKontrolDetay
     */
    public function setUrunKodu($UrunKodu)
    {
      $this->UrunKodu = $UrunKodu;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunUrl()
    {
      return $this->UrunUrl;
    }

    /**
     * @param string $UrunUrl
     * @return \PttAVM\StokKontrolDetay
     */
    public function setUrunUrl($UrunUrl)
    {
      $this->UrunUrl = $UrunUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getUzunAciklama()
    {
      return $this->UzunAciklama;
    }

    /**
     * @param string $UzunAciklama
     * @return \PttAVM\StokKontrolDetay
     */
    public function setUzunAciklama($UzunAciklama)
    {
      $this->UzunAciklama = $UzunAciklama;
      return $this;
    }

    /**
     * @return ArrayOfVariants
     */
    public function getVariantListesi()
    {
      return $this->VariantListesi;
    }

    /**
     * @param ArrayOfVariants $VariantListesi
     * @return \PttAVM\StokKontrolDetay
     */
    public function setVariantListesi($VariantListesi)
    {
      $this->VariantListesi = $VariantListesi;
      return $this;
    }

    /**
     * @return string
     */
    public function getYeniKategoriId()
    {
      return $this->YeniKategoriId;
    }

    /**
     * @param string $YeniKategoriId
     * @return \PttAVM\StokKontrolDetay
     */
    public function setYeniKategoriId($YeniKategoriId)
    {
      $this->YeniKategoriId = $YeniKategoriId;
      return $this;
    }

}

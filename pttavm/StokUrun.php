<?php

namespace PttAVM;

class StokUrun
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
     * @var string $Gtin
     */
    protected $Gtin = null;

    /**
     * @var boolean $IsAdmin
     */
    protected $IsAdmin = null;

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
     * @var string $SatisBaslangicTarihi
     */
    protected $SatisBaslangicTarihi = null;

    /**
     * @var string $SatisBitisTarihi
     */
    protected $SatisBitisTarihi = null;

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
     * @var ArrayOfUrunResim $UrunResimleri
     */
    protected $UrunResimleri = null;

    /**
     * @var ArrayOfUrunResimBase64 $UrunResimleriBase64
     */
    protected $UrunResimleriBase64 = null;

    /**
     * @var string $UrunUrl
     */
    protected $UrunUrl = null;

    /**
     * @var string $UzunAciklama
     */
    protected $UzunAciklama = null;

    /**
     * @var ArrayOfVariant $VariantListesi
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
     */
    public function setGarantiVerenFirma($GarantiVerenFirma)
    {
      $this->GarantiVerenFirma = $GarantiVerenFirma;
      return $this;
    }

    /**
     * @return string
     */
    public function getGtin()
    {
      return $this->Gtin;
    }

    /**
     * @param string $Gtin
     * @return \PttAVM\StokUrun
     */
    public function setGtin($Gtin)
    {
      $this->Gtin = $Gtin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdmin()
    {
      return $this->IsAdmin;
    }

    /**
     * @param boolean $IsAdmin
     * @return \PttAVM\StokUrun
     */
    public function setIsAdmin($IsAdmin)
    {
      $this->IsAdmin = $IsAdmin;
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
     */
    public function setMiktar($Miktar)
    {
      $this->Miktar = $Miktar;
      return $this;
    }

    /**
     * @return string
     */
    public function getSatisBaslangicTarihi()
    {
      return $this->SatisBaslangicTarihi;
    }

    /**
     * @param string $SatisBaslangicTarihi
     * @return \PttAVM\StokUrun
     */
    public function setSatisBaslangicTarihi($SatisBaslangicTarihi)
    {
      $this->SatisBaslangicTarihi = $SatisBaslangicTarihi;
      return $this;
    }

    /**
     * @return string
     */
    public function getSatisBitisTarihi()
    {
      return $this->SatisBitisTarihi;
    }

    /**
     * @param string $SatisBitisTarihi
     * @return \PttAVM\StokUrun
     */
    public function setSatisBitisTarihi($SatisBitisTarihi)
    {
      $this->SatisBitisTarihi = $SatisBitisTarihi;
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
     */
    public function setUrunKodu($UrunKodu)
    {
      $this->UrunKodu = $UrunKodu;
      return $this;
    }

    /**
     * @return ArrayOfUrunResim
     */
    public function getUrunResimleri()
    {
      return $this->UrunResimleri;
    }

    /**
     * @param ArrayOfUrunResim $UrunResimleri
     * @return \PttAVM\StokUrun
     */
    public function setUrunResimleri($UrunResimleri)
    {
      $this->UrunResimleri = $UrunResimleri;
      return $this;
    }

    /**
     * @return ArrayOfUrunResimBase64
     */
    public function getUrunResimleriBase64()
    {
      return $this->UrunResimleriBase64;
    }

    /**
     * @param ArrayOfUrunResimBase64 $UrunResimleriBase64
     * @return \PttAVM\StokUrun
     */
    public function setUrunResimleriBase64($UrunResimleriBase64)
    {
      $this->UrunResimleriBase64 = $UrunResimleriBase64;
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
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
     */
    public function setUzunAciklama($UzunAciklama)
    {
      $this->UzunAciklama = $UzunAciklama;
      return $this;
    }

    /**
     * @return ArrayOfVariant
     */
    public function getVariantListesi()
    {
      return $this->VariantListesi;
    }

    /**
     * @param ArrayOfVariant $VariantListesi
     * @return \PttAVM\StokUrun
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
     * @return \PttAVM\StokUrun
     */
    public function setYeniKategoriId($YeniKategoriId)
    {
      $this->YeniKategoriId = $YeniKategoriId;
      return $this;
    }

}

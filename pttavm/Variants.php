<?php

namespace PttAVM;

class Variants
{

    /**
     * @var string $AnaUrunKodu
     */
    protected $AnaUrunKodu = null;

    /**
     * @var KayitDurum $Durum
     */
    protected $Durum = null;

    /**
     * @var float $Fiyat
     */
    protected $Fiyat = null;

    /**
     * @var boolean $FiyatFarkiMi
     */
    protected $FiyatFarkiMi = null;

    /**
     * @var string $GuncellemeSonucu
     */
    protected $GuncellemeSonucu = null;

    /**
     * @var int $KayitDegisti
     */
    protected $KayitDegisti = null;

    /**
     * @var int $Miktar
     */
    protected $Miktar = null;

    /**
     * @var string $Variant1Deger
     */
    protected $Variant1Deger = null;

    /**
     * @var string $Variant2Deger
     */
    protected $Variant2Deger = null;

    /**
     * @var string $VariantBarkod
     */
    protected $VariantBarkod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAnaUrunKodu()
    {
      return $this->AnaUrunKodu;
    }

    /**
     * @param string $AnaUrunKodu
     * @return \PttAVM\Variants
     */
    public function setAnaUrunKodu($AnaUrunKodu)
    {
      $this->AnaUrunKodu = $AnaUrunKodu;
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
     * @return \PttAVM\Variants
     */
    public function setDurum($Durum)
    {
      $this->Durum = $Durum;
      return $this;
    }

    /**
     * @return float
     */
    public function getFiyat()
    {
      return $this->Fiyat;
    }

    /**
     * @param float $Fiyat
     * @return \PttAVM\Variants
     */
    public function setFiyat($Fiyat)
    {
      $this->Fiyat = $Fiyat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFiyatFarkiMi()
    {
      return $this->FiyatFarkiMi;
    }

    /**
     * @param boolean $FiyatFarkiMi
     * @return \PttAVM\Variants
     */
    public function setFiyatFarkiMi($FiyatFarkiMi)
    {
      $this->FiyatFarkiMi = $FiyatFarkiMi;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuncellemeSonucu()
    {
      return $this->GuncellemeSonucu;
    }

    /**
     * @param string $GuncellemeSonucu
     * @return \PttAVM\Variants
     */
    public function setGuncellemeSonucu($GuncellemeSonucu)
    {
      $this->GuncellemeSonucu = $GuncellemeSonucu;
      return $this;
    }

    /**
     * @return int
     */
    public function getKayitDegisti()
    {
      return $this->KayitDegisti;
    }

    /**
     * @param int $KayitDegisti
     * @return \PttAVM\Variants
     */
    public function setKayitDegisti($KayitDegisti)
    {
      $this->KayitDegisti = $KayitDegisti;
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
     * @return \PttAVM\Variants
     */
    public function setMiktar($Miktar)
    {
      $this->Miktar = $Miktar;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariant1Deger()
    {
      return $this->Variant1Deger;
    }

    /**
     * @param string $Variant1Deger
     * @return \PttAVM\Variants
     */
    public function setVariant1Deger($Variant1Deger)
    {
      $this->Variant1Deger = $Variant1Deger;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariant2Deger()
    {
      return $this->Variant2Deger;
    }

    /**
     * @param string $Variant2Deger
     * @return \PttAVM\Variants
     */
    public function setVariant2Deger($Variant2Deger)
    {
      $this->Variant2Deger = $Variant2Deger;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantBarkod()
    {
      return $this->VariantBarkod;
    }

    /**
     * @param string $VariantBarkod
     * @return \PttAVM\Variants
     */
    public function setVariantBarkod($VariantBarkod)
    {
      $this->VariantBarkod = $VariantBarkod;
      return $this;
    }

}

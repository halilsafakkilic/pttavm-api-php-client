<?php

namespace PttAVM;

class Variant
{

    /**
     * @var string $AnaUrunKodu
     */
    protected $AnaUrunKodu = null;

    /**
     * @var ArrayOfVariantAttr $Attributes
     */
    protected $Attributes = null;

    /**
     * @var ArrayOfVariantCombination $Combination
     */
    protected $Combination = null;

    /**
     * @var KayitDurum $Durum
     */
    protected $Durum = null;

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
     * @return \PttAVM\Variant
     */
    public function setAnaUrunKodu($AnaUrunKodu)
    {
      $this->AnaUrunKodu = $AnaUrunKodu;
      return $this;
    }

    /**
     * @return ArrayOfVariantAttr
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param ArrayOfVariantAttr $Attributes
     * @return \PttAVM\Variant
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return ArrayOfVariantCombination
     */
    public function getCombination()
    {
      return $this->Combination;
    }

    /**
     * @param ArrayOfVariantCombination $Combination
     * @return \PttAVM\Variant
     */
    public function setCombination($Combination)
    {
      $this->Combination = $Combination;
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
     * @return \PttAVM\Variant
     */
    public function setDurum($Durum)
    {
      $this->Durum = $Durum;
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
     * @return \PttAVM\Variant
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
     * @return \PttAVM\Variant
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
     * @return \PttAVM\Variant
     */
    public function setMiktar($Miktar)
    {
      $this->Miktar = $Miktar;
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
     * @return \PttAVM\Variant
     */
    public function setVariantBarkod($VariantBarkod)
    {
      $this->VariantBarkod = $VariantBarkod;
      return $this;
    }

}

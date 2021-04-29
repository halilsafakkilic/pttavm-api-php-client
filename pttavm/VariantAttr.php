<?php

namespace PttAVM;

class VariantAttr
{

    /**
     * @var string $Deger
     */
    protected $Deger = null;

    /**
     * @var float $Fiyat
     */
    protected $Fiyat = null;

    /**
     * @var boolean $FiyatFarkiMi
     */
    protected $FiyatFarkiMi = null;

    /**
     * @var string $Tanim
     */
    protected $Tanim = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDeger()
    {
      return $this->Deger;
    }

    /**
     * @param string $Deger
     * @return \PttAVM\VariantAttr
     */
    public function setDeger($Deger)
    {
      $this->Deger = $Deger;
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
     * @return \PttAVM\VariantAttr
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
     * @return \PttAVM\VariantAttr
     */
    public function setFiyatFarkiMi($FiyatFarkiMi)
    {
      $this->FiyatFarkiMi = $FiyatFarkiMi;
      return $this;
    }

    /**
     * @return string
     */
    public function getTanim()
    {
      return $this->Tanim;
    }

    /**
     * @param string $Tanim
     * @return \PttAVM\VariantAttr
     */
    public function setTanim($Tanim)
    {
      $this->Tanim = $Tanim;
      return $this;
    }

}

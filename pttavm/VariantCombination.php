<?php

namespace PttAVM;

class VariantCombination
{

    /**
     * @var boolean $Aktif
     */
    protected $Aktif = null;

    /**
     * @var string $Barkod
     */
    protected $Barkod = null;

    /**
     * @var string $Degerler
     */
    protected $Degerler = null;

    /**
     * @var string $Stok
     */
    protected $Stok = null;

    
    public function __construct()
    {
    
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
     * @return \PttAVM\VariantCombination
     */
    public function setAktif($Aktif)
    {
      $this->Aktif = $Aktif;
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
     * @return \PttAVM\VariantCombination
     */
    public function setBarkod($Barkod)
    {
      $this->Barkod = $Barkod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDegerler()
    {
      return $this->Degerler;
    }

    /**
     * @param string $Degerler
     * @return \PttAVM\VariantCombination
     */
    public function setDegerler($Degerler)
    {
      $this->Degerler = $Degerler;
      return $this;
    }

    /**
     * @return string
     */
    public function getStok()
    {
      return $this->Stok;
    }

    /**
     * @param string $Stok
     * @return \PttAVM\VariantCombination
     */
    public function setStok($Stok)
    {
      $this->Stok = $Stok;
      return $this;
    }

}

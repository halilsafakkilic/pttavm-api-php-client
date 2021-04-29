<?php

namespace PttAVM;

class AltKategoriDetay
{

    /**
     * @var string $AltKategoriAdi
     */
    protected $AltKategoriAdi = null;

    /**
     * @var int $AltKategoriId
     */
    protected $AltKategoriId = null;

    /**
     * @var string $KategoriAdi
     */
    protected $KategoriAdi = null;

    /**
     * @var int $KategoriId
     */
    protected $KategoriId = null;

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

    
    public function __construct()
    {
    
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
     * @return \PttAVM\AltKategoriDetay
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
     * @return \PttAVM\AltKategoriDetay
     */
    public function setAltKategoriId($AltKategoriId)
    {
      $this->AltKategoriId = $AltKategoriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getKategoriAdi()
    {
      return $this->KategoriAdi;
    }

    /**
     * @param string $KategoriAdi
     * @return \PttAVM\AltKategoriDetay
     */
    public function setKategoriAdi($KategoriAdi)
    {
      $this->KategoriAdi = $KategoriAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getKategoriId()
    {
      return $this->KategoriId;
    }

    /**
     * @param int $KategoriId
     * @return \PttAVM\AltKategoriDetay
     */
    public function setKategoriId($KategoriId)
    {
      $this->KategoriId = $KategoriId;
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
     * @return \PttAVM\AltKategoriDetay
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
     * @return \PttAVM\AltKategoriDetay
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
     * @return \PttAVM\AltKategoriDetay
     */
    public function setTedarikciSanalKategoriId($TedarikciSanalKategoriId)
    {
      $this->TedarikciSanalKategoriId = $TedarikciSanalKategoriId;
      return $this;
    }

}

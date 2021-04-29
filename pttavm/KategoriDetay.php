<?php

namespace PttAVM;

class KategoriDetay
{

    /**
     * @var string $KategoriAdi
     */
    protected $KategoriAdi = null;

    /**
     * @var int $KategoriId
     */
    protected $KategoriId = null;

    
    public function __construct()
    {
    
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
     * @return \PttAVM\KategoriDetay
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
     * @return \PttAVM\KategoriDetay
     */
    public function setKategoriId($KategoriId)
    {
      $this->KategoriId = $KategoriId;
      return $this;
    }

}

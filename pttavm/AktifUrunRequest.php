<?php

namespace PttAVM;

class AktifUrunRequest
{

    /**
     * @var boolean $Aktif
     */
    protected $Aktif = null;

    /**
     * @var int $UrunId
     */
    protected $UrunId = null;

    
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
     * @return \PttAVM\AktifUrunRequest
     */
    public function setAktif($Aktif)
    {
      $this->Aktif = $Aktif;
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
     * @return \PttAVM\AktifUrunRequest
     */
    public function setUrunId($UrunId)
    {
      $this->UrunId = $UrunId;
      return $this;
    }

}

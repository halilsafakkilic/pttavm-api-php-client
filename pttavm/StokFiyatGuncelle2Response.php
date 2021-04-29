<?php

namespace PttAVM;

class StokFiyatGuncelle2Response
{

    /**
     * @var boolean $StokFiyatGuncelle2Result
     */
    protected $StokFiyatGuncelle2Result = null;

    /**
     * @param boolean $StokFiyatGuncelle2Result
     */
    public function __construct($StokFiyatGuncelle2Result)
    {
      $this->StokFiyatGuncelle2Result = $StokFiyatGuncelle2Result;
    }

    /**
     * @return boolean
     */
    public function getStokFiyatGuncelle2Result()
    {
      return $this->StokFiyatGuncelle2Result;
    }

    /**
     * @param boolean $StokFiyatGuncelle2Result
     * @return \PttAVM\StokFiyatGuncelle2Response
     */
    public function setStokFiyatGuncelle2Result($StokFiyatGuncelle2Result)
    {
      $this->StokFiyatGuncelle2Result = $StokFiyatGuncelle2Result;
      return $this;
    }

}

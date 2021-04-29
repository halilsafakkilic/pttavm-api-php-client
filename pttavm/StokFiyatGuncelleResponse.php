<?php

namespace PttAVM;

class StokFiyatGuncelleResponse
{

    /**
     * @var boolean $StokFiyatGuncelleResult
     */
    protected $StokFiyatGuncelleResult = null;

    /**
     * @param boolean $StokFiyatGuncelleResult
     */
    public function __construct($StokFiyatGuncelleResult)
    {
      $this->StokFiyatGuncelleResult = $StokFiyatGuncelleResult;
    }

    /**
     * @return boolean
     */
    public function getStokFiyatGuncelleResult()
    {
      return $this->StokFiyatGuncelleResult;
    }

    /**
     * @param boolean $StokFiyatGuncelleResult
     * @return \PttAVM\StokFiyatGuncelleResponse
     */
    public function setStokFiyatGuncelleResult($StokFiyatGuncelleResult)
    {
      $this->StokFiyatGuncelleResult = $StokFiyatGuncelleResult;
      return $this;
    }

}

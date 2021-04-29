<?php

namespace PttAVM;

class StokGuncelleResponse
{

    /**
     * @var boolean $StokGuncelleResult
     */
    protected $StokGuncelleResult = null;

    /**
     * @param boolean $StokGuncelleResult
     */
    public function __construct($StokGuncelleResult)
    {
      $this->StokGuncelleResult = $StokGuncelleResult;
    }

    /**
     * @return boolean
     */
    public function getStokGuncelleResult()
    {
      return $this->StokGuncelleResult;
    }

    /**
     * @param boolean $StokGuncelleResult
     * @return \PttAVM\StokGuncelleResponse
     */
    public function setStokGuncelleResult($StokGuncelleResult)
    {
      $this->StokGuncelleResult = $StokGuncelleResult;
      return $this;
    }

}

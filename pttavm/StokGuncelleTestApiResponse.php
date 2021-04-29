<?php

namespace PttAVM;

class StokGuncelleTestApiResponse
{

    /**
     * @var StokResult $StokGuncelleTestApiResult
     */
    protected $StokGuncelleTestApiResult = null;

    /**
     * @param StokResult $StokGuncelleTestApiResult
     */
    public function __construct($StokGuncelleTestApiResult)
    {
      $this->StokGuncelleTestApiResult = $StokGuncelleTestApiResult;
    }

    /**
     * @return StokResult
     */
    public function getStokGuncelleTestApiResult()
    {
      return $this->StokGuncelleTestApiResult;
    }

    /**
     * @param StokResult $StokGuncelleTestApiResult
     * @return \PttAVM\StokGuncelleTestApiResponse
     */
    public function setStokGuncelleTestApiResult($StokGuncelleTestApiResult)
    {
      $this->StokGuncelleTestApiResult = $StokGuncelleTestApiResult;
      return $this;
    }

}

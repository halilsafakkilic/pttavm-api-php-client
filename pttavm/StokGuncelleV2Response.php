<?php

namespace PttAVM;

class StokGuncelleV2Response
{

    /**
     * @var StokResult $StokGuncelleV2Result
     */
    protected $StokGuncelleV2Result = null;

    /**
     * @param StokResult $StokGuncelleV2Result
     */
    public function __construct($StokGuncelleV2Result)
    {
      $this->StokGuncelleV2Result = $StokGuncelleV2Result;
    }

    /**
     * @return StokResult
     */
    public function getStokGuncelleV2Result()
    {
      return $this->StokGuncelleV2Result;
    }

    /**
     * @param StokResult $StokGuncelleV2Result
     * @return \PttAVM\StokGuncelleV2Response
     */
    public function setStokGuncelleV2Result($StokGuncelleV2Result)
    {
      $this->StokGuncelleV2Result = $StokGuncelleV2Result;
      return $this;
    }

}

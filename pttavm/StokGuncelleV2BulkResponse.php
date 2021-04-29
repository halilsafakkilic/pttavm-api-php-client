<?php

namespace PttAVM;

class StokGuncelleV2BulkResponse
{

    /**
     * @var ArrayOfclsResultTransferObject $StokGuncelleV2BulkResult
     */
    protected $StokGuncelleV2BulkResult = null;

    /**
     * @param ArrayOfclsResultTransferObject $StokGuncelleV2BulkResult
     */
    public function __construct($StokGuncelleV2BulkResult)
    {
      $this->StokGuncelleV2BulkResult = $StokGuncelleV2BulkResult;
    }

    /**
     * @return ArrayOfclsResultTransferObject
     */
    public function getStokGuncelleV2BulkResult()
    {
      return $this->StokGuncelleV2BulkResult;
    }

    /**
     * @param ArrayOfclsResultTransferObject $StokGuncelleV2BulkResult
     * @return \PttAVM\StokGuncelleV2BulkResponse
     */
    public function setStokGuncelleV2BulkResult($StokGuncelleV2BulkResult)
    {
      $this->StokGuncelleV2BulkResult = $StokGuncelleV2BulkResult;
      return $this;
    }

}

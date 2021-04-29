<?php

namespace PttAVM;

class StokGuncelleBulkResponse
{

    /**
     * @var ArrayOfclsResultTransferObject $StokGuncelleBulkResult
     */
    protected $StokGuncelleBulkResult = null;

    /**
     * @param ArrayOfclsResultTransferObject $StokGuncelleBulkResult
     */
    public function __construct($StokGuncelleBulkResult)
    {
      $this->StokGuncelleBulkResult = $StokGuncelleBulkResult;
    }

    /**
     * @return ArrayOfclsResultTransferObject
     */
    public function getStokGuncelleBulkResult()
    {
      return $this->StokGuncelleBulkResult;
    }

    /**
     * @param ArrayOfclsResultTransferObject $StokGuncelleBulkResult
     * @return \PttAVM\StokGuncelleBulkResponse
     */
    public function setStokGuncelleBulkResult($StokGuncelleBulkResult)
    {
      $this->StokGuncelleBulkResult = $StokGuncelleBulkResult;
      return $this;
    }

}

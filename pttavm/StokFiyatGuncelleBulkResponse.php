<?php

namespace PttAVM;

class StokFiyatGuncelleBulkResponse
{

    /**
     * @var ArrayOfclsResultTransferObject $StokFiyatGuncelleBulkResult
     */
    protected $StokFiyatGuncelleBulkResult = null;

    /**
     * @param ArrayOfclsResultTransferObject $StokFiyatGuncelleBulkResult
     */
    public function __construct($StokFiyatGuncelleBulkResult)
    {
      $this->StokFiyatGuncelleBulkResult = $StokFiyatGuncelleBulkResult;
    }

    /**
     * @return ArrayOfclsResultTransferObject
     */
    public function getStokFiyatGuncelleBulkResult()
    {
      return $this->StokFiyatGuncelleBulkResult;
    }

    /**
     * @param ArrayOfclsResultTransferObject $StokFiyatGuncelleBulkResult
     * @return \PttAVM\StokFiyatGuncelleBulkResponse
     */
    public function setStokFiyatGuncelleBulkResult($StokFiyatGuncelleBulkResult)
    {
      $this->StokFiyatGuncelleBulkResult = $StokFiyatGuncelleBulkResult;
      return $this;
    }

}

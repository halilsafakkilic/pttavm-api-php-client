<?php

namespace PttAVM;

class BarkodKontrolBulkResponse
{

    /**
     * @var ArrayOfStokKontrolDetay $BarkodKontrolBulkResult
     */
    protected $BarkodKontrolBulkResult = null;

    /**
     * @param ArrayOfStokKontrolDetay $BarkodKontrolBulkResult
     */
    public function __construct($BarkodKontrolBulkResult)
    {
      $this->BarkodKontrolBulkResult = $BarkodKontrolBulkResult;
    }

    /**
     * @return ArrayOfStokKontrolDetay
     */
    public function getBarkodKontrolBulkResult()
    {
      return $this->BarkodKontrolBulkResult;
    }

    /**
     * @param ArrayOfStokKontrolDetay $BarkodKontrolBulkResult
     * @return \PttAVM\BarkodKontrolBulkResponse
     */
    public function setBarkodKontrolBulkResult($BarkodKontrolBulkResult)
    {
      $this->BarkodKontrolBulkResult = $BarkodKontrolBulkResult;
      return $this;
    }

}

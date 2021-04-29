<?php

namespace PttAVM;

class StokKontrolListesiResponse
{

    /**
     * @var ArrayOfStokKontrolDetay $StokKontrolListesiResult
     */
    protected $StokKontrolListesiResult = null;

    /**
     * @param ArrayOfStokKontrolDetay $StokKontrolListesiResult
     */
    public function __construct($StokKontrolListesiResult)
    {
      $this->StokKontrolListesiResult = $StokKontrolListesiResult;
    }

    /**
     * @return ArrayOfStokKontrolDetay
     */
    public function getStokKontrolListesiResult()
    {
      return $this->StokKontrolListesiResult;
    }

    /**
     * @param ArrayOfStokKontrolDetay $StokKontrolListesiResult
     * @return \PttAVM\StokKontrolListesiResponse
     */
    public function setStokKontrolListesiResult($StokKontrolListesiResult)
    {
      $this->StokKontrolListesiResult = $StokKontrolListesiResult;
      return $this;
    }

}

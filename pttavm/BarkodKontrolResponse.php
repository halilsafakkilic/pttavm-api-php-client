<?php

namespace PttAVM;

class BarkodKontrolResponse
{

    /**
     * @var StokKontrolDetay $BarkodKontrolResult
     */
    protected $BarkodKontrolResult = null;

    /**
     * @param StokKontrolDetay $BarkodKontrolResult
     */
    public function __construct($BarkodKontrolResult)
    {
      $this->BarkodKontrolResult = $BarkodKontrolResult;
    }

    /**
     * @return StokKontrolDetay
     */
    public function getBarkodKontrolResult()
    {
      return $this->BarkodKontrolResult;
    }

    /**
     * @param StokKontrolDetay $BarkodKontrolResult
     * @return \PttAVM\BarkodKontrolResponse
     */
    public function setBarkodKontrolResult($BarkodKontrolResult)
    {
      $this->BarkodKontrolResult = $BarkodKontrolResult;
      return $this;
    }

}

<?php

namespace PttAVM;

class AltKategoriListesiResponse
{

    /**
     * @var ArrayOfAltKategoriDetay $AltKategoriListesiResult
     */
    protected $AltKategoriListesiResult = null;

    /**
     * @param ArrayOfAltKategoriDetay $AltKategoriListesiResult
     */
    public function __construct($AltKategoriListesiResult)
    {
      $this->AltKategoriListesiResult = $AltKategoriListesiResult;
    }

    /**
     * @return ArrayOfAltKategoriDetay
     */
    public function getAltKategoriListesiResult()
    {
      return $this->AltKategoriListesiResult;
    }

    /**
     * @param ArrayOfAltKategoriDetay $AltKategoriListesiResult
     * @return \PttAVM\AltKategoriListesiResponse
     */
    public function setAltKategoriListesiResult($AltKategoriListesiResult)
    {
      $this->AltKategoriListesiResult = $AltKategoriListesiResult;
      return $this;
    }

}

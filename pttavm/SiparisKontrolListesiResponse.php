<?php

namespace PttAVM;

class SiparisKontrolListesiResponse
{

    /**
     * @var ArrayOfTedarikciSiparisKontrol $SiparisKontrolListesiResult
     */
    protected $SiparisKontrolListesiResult = null;

    /**
     * @param ArrayOfTedarikciSiparisKontrol $SiparisKontrolListesiResult
     */
    public function __construct($SiparisKontrolListesiResult)
    {
      $this->SiparisKontrolListesiResult = $SiparisKontrolListesiResult;
    }

    /**
     * @return ArrayOfTedarikciSiparisKontrol
     */
    public function getSiparisKontrolListesiResult()
    {
      return $this->SiparisKontrolListesiResult;
    }

    /**
     * @param ArrayOfTedarikciSiparisKontrol $SiparisKontrolListesiResult
     * @return \PttAVM\SiparisKontrolListesiResponse
     */
    public function setSiparisKontrolListesiResult($SiparisKontrolListesiResult)
    {
      $this->SiparisKontrolListesiResult = $SiparisKontrolListesiResult;
      return $this;
    }

}

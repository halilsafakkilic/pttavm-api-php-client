<?php

namespace PttAVM;

class SiparisKontrolListesiV2Response
{

    /**
     * @var ArrayOfTedarikciSiparisKontrolV2 $SiparisKontrolListesiV2Result
     */
    protected $SiparisKontrolListesiV2Result = null;

    /**
     * @param ArrayOfTedarikciSiparisKontrolV2 $SiparisKontrolListesiV2Result
     */
    public function __construct($SiparisKontrolListesiV2Result)
    {
      $this->SiparisKontrolListesiV2Result = $SiparisKontrolListesiV2Result;
    }

    /**
     * @return ArrayOfTedarikciSiparisKontrolV2
     */
    public function getSiparisKontrolListesiV2Result()
    {
      return $this->SiparisKontrolListesiV2Result;
    }

    /**
     * @param ArrayOfTedarikciSiparisKontrolV2 $SiparisKontrolListesiV2Result
     * @return \PttAVM\SiparisKontrolListesiV2Response
     */
    public function setSiparisKontrolListesiV2Result($SiparisKontrolListesiV2Result)
    {
      $this->SiparisKontrolListesiV2Result = $SiparisKontrolListesiV2Result;
      return $this;
    }

}

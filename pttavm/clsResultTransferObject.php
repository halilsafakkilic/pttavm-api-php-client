<?php

namespace PttAVM;

class clsResultTransferObject
{

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var boolean $Sonuc
     */
    protected $Sonuc = null;

    /**
     * @param boolean $Sonuc
     */
    public function __construct($Sonuc)
    {
      $this->Sonuc = $Sonuc;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \PttAVM\clsResultTransferObject
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSonuc()
    {
      return $this->Sonuc;
    }

    /**
     * @param boolean $Sonuc
     * @return \PttAVM\clsResultTransferObject
     */
    public function setSonuc($Sonuc)
    {
      $this->Sonuc = $Sonuc;
      return $this;
    }

}

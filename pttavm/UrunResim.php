<?php

namespace PttAVM;

class UrunResim
{

    /**
     * @var int $Sira
     */
    protected $Sira = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSira()
    {
      return $this->Sira;
    }

    /**
     * @param int $Sira
     * @return \PttAVM\UrunResim
     */
    public function setSira($Sira)
    {
      $this->Sira = $Sira;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \PttAVM\UrunResim
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}

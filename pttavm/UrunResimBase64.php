<?php

namespace PttAVM;

class UrunResimBase64
{

    /**
     * @var string $Base64String
     */
    protected $Base64String = null;

    /**
     * @var string $FileExtention
     */
    protected $FileExtention = null;

    /**
     * @var int $Sira
     */
    protected $Sira = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBase64String()
    {
      return $this->Base64String;
    }

    /**
     * @param string $Base64String
     * @return \PttAVM\UrunResimBase64
     */
    public function setBase64String($Base64String)
    {
      $this->Base64String = $Base64String;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileExtention()
    {
      return $this->FileExtention;
    }

    /**
     * @param string $FileExtention
     * @return \PttAVM\UrunResimBase64
     */
    public function setFileExtention($FileExtention)
    {
      $this->FileExtention = $FileExtention;
      return $this;
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
     * @return \PttAVM\UrunResimBase64
     */
    public function setSira($Sira)
    {
      $this->Sira = $Sira;
      return $this;
    }

}

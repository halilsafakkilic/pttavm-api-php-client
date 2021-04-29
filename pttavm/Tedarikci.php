<?php

namespace PttAVM;

class Tedarikci
{

    /**
     * @var string $TedarikciAdi
     */
    protected $TedarikciAdi = null;

    /**
     * @var int $TedarikciId
     */
    protected $TedarikciId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTedarikciAdi()
    {
      return $this->TedarikciAdi;
    }

    /**
     * @param string $TedarikciAdi
     * @return \PttAVM\Tedarikci
     */
    public function setTedarikciAdi($TedarikciAdi)
    {
      $this->TedarikciAdi = $TedarikciAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getTedarikciId()
    {
      return $this->TedarikciId;
    }

    /**
     * @param int $TedarikciId
     * @return \PttAVM\Tedarikci
     */
    public function setTedarikciId($TedarikciId)
    {
      $this->TedarikciId = $TedarikciId;
      return $this;
    }

}

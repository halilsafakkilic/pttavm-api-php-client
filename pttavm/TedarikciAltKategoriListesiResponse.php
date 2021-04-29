<?php

namespace PttAVM;

class TedarikciAltKategoriListesiResponse
{

    /**
     * @var ArrayOfAltKategoriDetay $TedarikciAltKategoriListesiResult
     */
    protected $TedarikciAltKategoriListesiResult = null;

    /**
     * @param ArrayOfAltKategoriDetay $TedarikciAltKategoriListesiResult
     */
    public function __construct($TedarikciAltKategoriListesiResult)
    {
      $this->TedarikciAltKategoriListesiResult = $TedarikciAltKategoriListesiResult;
    }

    /**
     * @return ArrayOfAltKategoriDetay
     */
    public function getTedarikciAltKategoriListesiResult()
    {
      return $this->TedarikciAltKategoriListesiResult;
    }

    /**
     * @param ArrayOfAltKategoriDetay $TedarikciAltKategoriListesiResult
     * @return \PttAVM\TedarikciAltKategoriListesiResponse
     */
    public function setTedarikciAltKategoriListesiResult($TedarikciAltKategoriListesiResult)
    {
      $this->TedarikciAltKategoriListesiResult = $TedarikciAltKategoriListesiResult;
      return $this;
    }

}

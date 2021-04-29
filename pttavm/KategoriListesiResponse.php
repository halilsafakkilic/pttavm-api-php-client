<?php

namespace PttAVM;

class KategoriListesiResponse
{

    /**
     * @var ArrayOfKategoriDetay $KategoriListesiResult
     */
    protected $KategoriListesiResult = null;

    /**
     * @param ArrayOfKategoriDetay $KategoriListesiResult
     */
    public function __construct($KategoriListesiResult)
    {
      $this->KategoriListesiResult = $KategoriListesiResult;
    }

    /**
     * @return ArrayOfKategoriDetay
     */
    public function getKategoriListesiResult()
    {
      return $this->KategoriListesiResult;
    }

    /**
     * @param ArrayOfKategoriDetay $KategoriListesiResult
     * @return \PttAVM\KategoriListesiResponse
     */
    public function setKategoriListesiResult($KategoriListesiResult)
    {
      $this->KategoriListesiResult = $KategoriListesiResult;
      return $this;
    }

}

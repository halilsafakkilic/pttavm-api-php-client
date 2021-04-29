<?php

namespace PttAVM;

class StokFiyatGuncelle3Response
{

    /**
     * @var StokResult $StokFiyatGuncelle3Result
     */
    protected $StokFiyatGuncelle3Result = null;

    /**
     * @param StokResult $StokFiyatGuncelle3Result
     */
    public function __construct($StokFiyatGuncelle3Result)
    {
      $this->StokFiyatGuncelle3Result = $StokFiyatGuncelle3Result;
    }

    /**
     * @return StokResult
     */
    public function getStokFiyatGuncelle3Result()
    {
      return $this->StokFiyatGuncelle3Result;
    }

    /**
     * @param StokResult $StokFiyatGuncelle3Result
     * @return \PttAVM\StokFiyatGuncelle3Response
     */
    public function setStokFiyatGuncelle3Result($StokFiyatGuncelle3Result)
    {
      $this->StokFiyatGuncelle3Result = $StokFiyatGuncelle3Result;
      return $this;
    }

}

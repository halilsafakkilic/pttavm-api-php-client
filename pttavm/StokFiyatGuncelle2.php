<?php

namespace PttAVM;

class StokFiyatGuncelle2
{

    /**
     * @var StokKontrolDetay $item
     */
    protected $item = null;

    /**
     * @param StokKontrolDetay $item
     */
    public function __construct($item)
    {
      $this->item = $item;
    }

    /**
     * @return StokKontrolDetay
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param StokKontrolDetay $item
     * @return \PttAVM\StokFiyatGuncelle2
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}

<?php

namespace PttAVM;

class StokGuncelle
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
     * @return \PttAVM\StokGuncelle
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}

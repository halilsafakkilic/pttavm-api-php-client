<?php

namespace PttAVM;

class StokFiyatGuncelleBulk
{

    /**
     * @var ArrayOfStokKontrolDetay $items
     */
    protected $items = null;

    /**
     * @param ArrayOfStokKontrolDetay $items
     */
    public function __construct($items)
    {
      $this->items = $items;
    }

    /**
     * @return ArrayOfStokKontrolDetay
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfStokKontrolDetay $items
     * @return \PttAVM\StokFiyatGuncelleBulk
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}

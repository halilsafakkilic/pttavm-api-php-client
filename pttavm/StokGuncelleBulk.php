<?php

namespace PttAVM;

class StokGuncelleBulk
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
     * @return \PttAVM\StokGuncelleBulk
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}

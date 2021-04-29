<?php

namespace PttAVM;

class StokGuncelleV2Bulk
{

    /**
     * @var ArrayOfStokUrun $items
     */
    protected $items = null;

    /**
     * @param ArrayOfStokUrun $items
     */
    public function __construct($items)
    {
      $this->items = $items;
    }

    /**
     * @return ArrayOfStokUrun
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfStokUrun $items
     * @return \PttAVM\StokGuncelleV2Bulk
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}

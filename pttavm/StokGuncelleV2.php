<?php

namespace PttAVM;

class StokGuncelleV2
{

    /**
     * @var StokUrun $item
     */
    protected $item = null;

    /**
     * @param StokUrun $item
     */
    public function __construct($item)
    {
      $this->item = $item;
    }

    /**
     * @return StokUrun
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param StokUrun $item
     * @return \PttAVM\StokGuncelleV2
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}

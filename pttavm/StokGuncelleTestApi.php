<?php

namespace PttAVM;

class StokGuncelleTestApi
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
     * @return \PttAVM\StokGuncelleTestApi
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}

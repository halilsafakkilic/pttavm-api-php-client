<?php

namespace PttAVM;

class BarkodKontrolBulk
{

    /**
     * @var ArrayOfstring $Barkod
     */
    protected $Barkod = null;

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    /**
     * @param ArrayOfstring $Barkod
     * @param int $ShopId
     */
    public function __construct($Barkod, $ShopId)
    {
      $this->Barkod = $Barkod;
      $this->ShopId = $ShopId;
    }

    /**
     * @return ArrayOfstring
     */
    public function getBarkod()
    {
      return $this->Barkod;
    }

    /**
     * @param ArrayOfstring $Barkod
     * @return \PttAVM\BarkodKontrolBulk
     */
    public function setBarkod($Barkod)
    {
      $this->Barkod = $Barkod;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param int $ShopId
     * @return \PttAVM\BarkodKontrolBulk
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

}

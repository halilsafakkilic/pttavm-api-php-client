<?php

namespace PttAVM;

class BarkodKontrol
{

    /**
     * @var string $Barkod
     */
    protected $Barkod = null;

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    /**
     * @param string $Barkod
     * @param int $ShopId
     */
    public function __construct($Barkod, $ShopId)
    {
      $this->Barkod = $Barkod;
      $this->ShopId = $ShopId;
    }

    /**
     * @return string
     */
    public function getBarkod()
    {
      return $this->Barkod;
    }

    /**
     * @param string $Barkod
     * @return \PttAVM\BarkodKontrol
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
     * @return \PttAVM\BarkodKontrol
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

}

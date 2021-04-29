<?php

namespace PttAVM;

class KargoBilgi
{

    /**
     * @var string $CurrentState
     */
    protected $CurrentState = null;

    /**
     * @var string $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var string $InCargo
     */
    protected $InCargo = null;

    /**
     * @var string $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $ReferenceCode
     */
    protected $ReferenceCode = null;

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrentState()
    {
      return $this->CurrentState;
    }

    /**
     * @param string $CurrentState
     * @return \PttAVM\KargoBilgi
     */
    public function setCurrentState($CurrentState)
    {
      $this->CurrentState = $CurrentState;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInfo()
    {
      return $this->DeliveryInfo;
    }

    /**
     * @param string $DeliveryInfo
     * @return \PttAVM\KargoBilgi
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCargo()
    {
      return $this->InCargo;
    }

    /**
     * @param string $InCargo
     * @return \PttAVM\KargoBilgi
     */
    public function setInCargo($InCargo)
    {
      $this->InCargo = $InCargo;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
      return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return \PttAVM\KargoBilgi
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceCode()
    {
      return $this->ReferenceCode;
    }

    /**
     * @param string $ReferenceCode
     * @return \PttAVM\KargoBilgi
     */
    public function setReferenceCode($ReferenceCode)
    {
      $this->ReferenceCode = $ReferenceCode;
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
     * @return \PttAVM\KargoBilgi
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

}

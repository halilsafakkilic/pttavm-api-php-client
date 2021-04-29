<?php

namespace PttAVM;

class KargoBilgiListesi
{

    /**
     * @var string $orderId
     */
    protected $orderId = null;

    /**
     * @param string $orderId
     */
    public function __construct($orderId)
    {
      $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return \PttAVM\KargoBilgiListesi
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}

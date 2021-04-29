<?php

namespace PttAVM;

class ServiceState
{

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
      $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \PttAVM\ServiceState
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}

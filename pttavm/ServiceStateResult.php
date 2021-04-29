<?php

namespace PttAVM;

class ServiceStateResult
{

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \PttAVM\ServiceStateResult
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \PttAVM\ServiceStateResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}

<?php

namespace PttAVM;

class ServiceStateResponse
{

    /**
     * @var ServiceStateResult $ServiceStateResult
     */
    protected $ServiceStateResult = null;

    /**
     * @param ServiceStateResult $ServiceStateResult
     */
    public function __construct($ServiceStateResult)
    {
      $this->ServiceStateResult = $ServiceStateResult;
    }

    /**
     * @return ServiceStateResult
     */
    public function getServiceStateResult()
    {
      return $this->ServiceStateResult;
    }

    /**
     * @param ServiceStateResult $ServiceStateResult
     * @return \PttAVM\ServiceStateResponse
     */
    public function setServiceStateResult($ServiceStateResult)
    {
      $this->ServiceStateResult = $ServiceStateResult;
      return $this;
    }

}

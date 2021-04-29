<?php

namespace PttAVM;

class GetVersionResponse
{

    /**
     * @var string $GetVersionResult
     */
    protected $GetVersionResult = null;

    /**
     * @param string $GetVersionResult
     */
    public function __construct($GetVersionResult)
    {
      $this->GetVersionResult = $GetVersionResult;
    }

    /**
     * @return string
     */
    public function getGetVersionResult()
    {
      return $this->GetVersionResult;
    }

    /**
     * @param string $GetVersionResult
     * @return \PttAVM\GetVersionResponse
     */
    public function setGetVersionResult($GetVersionResult)
    {
      $this->GetVersionResult = $GetVersionResult;
      return $this;
    }

}

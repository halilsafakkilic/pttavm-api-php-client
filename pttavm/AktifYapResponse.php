<?php

namespace PttAVM;

class AktifYapResponse
{

    /**
     * @var ApiResult $AktifYapResult
     */
    protected $AktifYapResult = null;

    /**
     * @param ApiResult $AktifYapResult
     */
    public function __construct($AktifYapResult)
    {
      $this->AktifYapResult = $AktifYapResult;
    }

    /**
     * @return ApiResult
     */
    public function getAktifYapResult()
    {
      return $this->AktifYapResult;
    }

    /**
     * @param ApiResult $AktifYapResult
     * @return \PttAVM\AktifYapResponse
     */
    public function setAktifYapResult($AktifYapResult)
    {
      $this->AktifYapResult = $AktifYapResult;
      return $this;
    }

}

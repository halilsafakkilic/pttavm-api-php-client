<?php

namespace PttAVM;

class KargoBilgiListesiResponse
{

    /**
     * @var ArrayOfKargoBilgi $KargoBilgiListesiResult
     */
    protected $KargoBilgiListesiResult = null;

    /**
     * @param ArrayOfKargoBilgi $KargoBilgiListesiResult
     */
    public function __construct($KargoBilgiListesiResult)
    {
      $this->KargoBilgiListesiResult = $KargoBilgiListesiResult;
    }

    /**
     * @return ArrayOfKargoBilgi
     */
    public function getKargoBilgiListesiResult()
    {
      return $this->KargoBilgiListesiResult;
    }

    /**
     * @param ArrayOfKargoBilgi $KargoBilgiListesiResult
     * @return \PttAVM\KargoBilgiListesiResponse
     */
    public function setKargoBilgiListesiResult($KargoBilgiListesiResult)
    {
      $this->KargoBilgiListesiResult = $KargoBilgiListesiResult;
      return $this;
    }

}

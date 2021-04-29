<?php

namespace PttAVM;

class OlmayanUrunAdetleriSifirlaResponse
{

    /**
     * @var int $OlmayanUrunAdetleriSifirlaResult
     */
    protected $OlmayanUrunAdetleriSifirlaResult = null;

    /**
     * @param int $OlmayanUrunAdetleriSifirlaResult
     */
    public function __construct($OlmayanUrunAdetleriSifirlaResult)
    {
      $this->OlmayanUrunAdetleriSifirlaResult = $OlmayanUrunAdetleriSifirlaResult;
    }

    /**
     * @return int
     */
    public function getOlmayanUrunAdetleriSifirlaResult()
    {
      return $this->OlmayanUrunAdetleriSifirlaResult;
    }

    /**
     * @param int $OlmayanUrunAdetleriSifirlaResult
     * @return \PttAVM\OlmayanUrunAdetleriSifirlaResponse
     */
    public function setOlmayanUrunAdetleriSifirlaResult($OlmayanUrunAdetleriSifirlaResult)
    {
      $this->OlmayanUrunAdetleriSifirlaResult = $OlmayanUrunAdetleriSifirlaResult;
      return $this;
    }

}

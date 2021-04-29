<?php

namespace PttAVM;

class GetCategoryResponse
{

    /**
     * @var categoryResponse $GetCategoryResult
     */
    protected $GetCategoryResult = null;

    /**
     * @param categoryResponse $GetCategoryResult
     */
    public function __construct($GetCategoryResult)
    {
      $this->GetCategoryResult = $GetCategoryResult;
    }

    /**
     * @return categoryResponse
     */
    public function getGetCategoryResult()
    {
      return $this->GetCategoryResult;
    }

    /**
     * @param categoryResponse $GetCategoryResult
     * @return \PttAVM\GetCategoryResponse
     */
    public function setGetCategoryResult($GetCategoryResult)
    {
      $this->GetCategoryResult = $GetCategoryResult;
      return $this;
    }

}

<?php

namespace PttAVM;

class GetMainCategoriesResponse
{

    /**
     * @var categoryMainResponse $GetMainCategoriesResult
     */
    protected $GetMainCategoriesResult = null;

    /**
     * @param categoryMainResponse $GetMainCategoriesResult
     */
    public function __construct($GetMainCategoriesResult)
    {
      $this->GetMainCategoriesResult = $GetMainCategoriesResult;
    }

    /**
     * @return categoryMainResponse
     */
    public function getGetMainCategoriesResult()
    {
      return $this->GetMainCategoriesResult;
    }

    /**
     * @param categoryMainResponse $GetMainCategoriesResult
     * @return \PttAVM\GetMainCategoriesResponse
     */
    public function setGetMainCategoriesResult($GetMainCategoriesResult)
    {
      $this->GetMainCategoriesResult = $GetMainCategoriesResult;
      return $this;
    }

}

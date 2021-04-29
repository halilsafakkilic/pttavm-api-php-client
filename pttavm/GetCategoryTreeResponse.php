<?php

namespace PttAVM;

class GetCategoryTreeResponse
{

    /**
     * @var categoryResponseTree $GetCategoryTreeResult
     */
    protected $GetCategoryTreeResult = null;

    /**
     * @param categoryResponseTree $GetCategoryTreeResult
     */
    public function __construct($GetCategoryTreeResult)
    {
      $this->GetCategoryTreeResult = $GetCategoryTreeResult;
    }

    /**
     * @return categoryResponseTree
     */
    public function getGetCategoryTreeResult()
    {
      return $this->GetCategoryTreeResult;
    }

    /**
     * @param categoryResponseTree $GetCategoryTreeResult
     * @return \PttAVM\GetCategoryTreeResponse
     */
    public function setGetCategoryTreeResult($GetCategoryTreeResult)
    {
      $this->GetCategoryTreeResult = $GetCategoryTreeResult;
      return $this;
    }

}

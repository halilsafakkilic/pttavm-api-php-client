<?php

namespace PttAVM;

class categoryMainResponse
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var ArrayOfcategory $main_category
     */
    protected $main_category = null;

    /**
     * @var error $error
     */
    protected $error = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean $success
     * @return \PttAVM\categoryMainResponse
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return ArrayOfcategory
     */
    public function getMain_category()
    {
      return $this->main_category;
    }

    /**
     * @param ArrayOfcategory $main_category
     * @return \PttAVM\categoryMainResponse
     */
    public function setMain_category($main_category)
    {
      $this->main_category = $main_category;
      return $this;
    }

    /**
     * @return error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param error $error
     * @return \PttAVM\categoryMainResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}

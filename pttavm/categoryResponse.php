<?php

namespace PttAVM;

class categoryResponse
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var category_detail $category
     */
    protected $category = null;

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
     * @return \PttAVM\categoryResponse
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return category_detail
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param category_detail $category
     * @return \PttAVM\categoryResponse
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \PttAVM\categoryResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}

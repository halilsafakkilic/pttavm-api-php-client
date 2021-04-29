<?php

namespace PttAVM;

class categoryResponseTree
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var ArrayOfCategory $category_tree
     */
    protected $category_tree = null;

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
     * @return \PttAVM\categoryResponseTree
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return ArrayOfCategory
     */
    public function getCategory_tree()
    {
      return $this->category_tree;
    }

    /**
     * @param ArrayOfCategory $category_tree
     * @return \PttAVM\categoryResponseTree
     */
    public function setCategory_tree($category_tree)
    {
      $this->category_tree = $category_tree;
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
     * @return \PttAVM\categoryResponseTree
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}

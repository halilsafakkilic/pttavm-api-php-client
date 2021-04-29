<?php

namespace PttAVM;

class GetCategoryTree
{

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $last_update
     */
    protected $last_update = null;

    /**
     * @param string $parent_id
     * @param string $last_update
     */
    public function __construct($parent_id, $last_update)
    {
      $this->parent_id = $parent_id;
      $this->last_update = $last_update;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return \PttAVM\GetCategoryTree
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLast_update()
    {
      return $this->last_update;
    }

    /**
     * @param string $last_update
     * @return \PttAVM\GetCategoryTree
     */
    public function setLast_update($last_update)
    {
      $this->last_update = $last_update;
      return $this;
    }

}

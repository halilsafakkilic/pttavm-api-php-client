<?php

namespace PttAVM;

class category_detail
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var \DateTime $updated_at
     */
    protected $updated_at = null;

    /**
     * @var ArrayOfcategory $children
     */
    protected $children = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \PttAVM\category_detail
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \PttAVM\category_detail
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \PttAVM\category_detail
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated_at()
    {
      if ($this->updated_at == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->updated_at);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $updated_at
     * @return \PttAVM\category_detail
     */
    public function setUpdated_at(\DateTime $updated_at = null)
    {
      if ($updated_at == null) {
       $this->updated_at = null;
      } else {
        $this->updated_at = $updated_at->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfcategory
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param ArrayOfcategory $children
     * @return \PttAVM\category_detail
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

}

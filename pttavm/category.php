<?php

namespace PttAVM;

class category
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
     * @var \DateTime $updated_at
     */
    protected $updated_at = null;

    
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
     * @return \PttAVM\category
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
     * @return \PttAVM\category
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \PttAVM\category
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

}

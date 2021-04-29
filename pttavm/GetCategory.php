<?php

namespace PttAVM;

class GetCategory
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
      $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \PttAVM\GetCategory
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}

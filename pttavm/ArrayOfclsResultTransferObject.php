<?php

namespace PttAVM;

class ArrayOfclsResultTransferObject implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var clsResultTransferObject[] $clsResultTransferObject
     */
    protected $clsResultTransferObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return clsResultTransferObject[]
     */
    public function getClsResultTransferObject()
    {
      return $this->clsResultTransferObject;
    }

    /**
     * @param clsResultTransferObject[] $clsResultTransferObject
     * @return \PttAVM\ArrayOfclsResultTransferObject
     */
    public function setClsResultTransferObject(array $clsResultTransferObject = null)
    {
      $this->clsResultTransferObject = $clsResultTransferObject;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->clsResultTransferObject[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return clsResultTransferObject
     */
    public function offsetGet($offset)
    {
      return $this->clsResultTransferObject[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param clsResultTransferObject $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->clsResultTransferObject[] = $value;
      } else {
        $this->clsResultTransferObject[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->clsResultTransferObject[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return clsResultTransferObject Return the current element
     */
    public function current()
    {
      return current($this->clsResultTransferObject);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->clsResultTransferObject);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->clsResultTransferObject);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->clsResultTransferObject);
    }

    /**
     * Countable implementation
     *
     * @return clsResultTransferObject Return count of elements
     */
    public function count()
    {
      return count($this->clsResultTransferObject);
    }

}

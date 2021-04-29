<?php

namespace PttAVM;

class ArrayOfVariants implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Variants[] $Variants
     */
    protected $Variants = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Variants[]
     */
    public function getVariants()
    {
      return $this->Variants;
    }

    /**
     * @param Variants[] $Variants
     * @return \PttAVM\ArrayOfVariants
     */
    public function setVariants(array $Variants = null)
    {
      $this->Variants = $Variants;
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
      return isset($this->Variants[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Variants
     */
    public function offsetGet($offset)
    {
      return $this->Variants[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Variants $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Variants[] = $value;
      } else {
        $this->Variants[$offset] = $value;
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
      unset($this->Variants[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Variants Return the current element
     */
    public function current()
    {
      return current($this->Variants);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Variants);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Variants);
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
      reset($this->Variants);
    }

    /**
     * Countable implementation
     *
     * @return Variants Return count of elements
     */
    public function count()
    {
      return count($this->Variants);
    }

}

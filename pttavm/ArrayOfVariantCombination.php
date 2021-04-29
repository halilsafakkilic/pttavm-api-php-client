<?php

namespace PttAVM;

class ArrayOfVariantCombination implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VariantCombination[] $VariantCombination
     */
    protected $VariantCombination = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VariantCombination[]
     */
    public function getVariantCombination()
    {
      return $this->VariantCombination;
    }

    /**
     * @param VariantCombination[] $VariantCombination
     * @return \PttAVM\ArrayOfVariantCombination
     */
    public function setVariantCombination(array $VariantCombination = null)
    {
      $this->VariantCombination = $VariantCombination;
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
      return isset($this->VariantCombination[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VariantCombination
     */
    public function offsetGet($offset)
    {
      return $this->VariantCombination[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VariantCombination $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VariantCombination[] = $value;
      } else {
        $this->VariantCombination[$offset] = $value;
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
      unset($this->VariantCombination[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VariantCombination Return the current element
     */
    public function current()
    {
      return current($this->VariantCombination);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VariantCombination);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VariantCombination);
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
      reset($this->VariantCombination);
    }

    /**
     * Countable implementation
     *
     * @return VariantCombination Return count of elements
     */
    public function count()
    {
      return count($this->VariantCombination);
    }

}

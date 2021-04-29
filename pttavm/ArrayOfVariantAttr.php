<?php

namespace PttAVM;

class ArrayOfVariantAttr implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VariantAttr[] $VariantAttr
     */
    protected $VariantAttr = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VariantAttr[]
     */
    public function getVariantAttr()
    {
      return $this->VariantAttr;
    }

    /**
     * @param VariantAttr[] $VariantAttr
     * @return \PttAVM\ArrayOfVariantAttr
     */
    public function setVariantAttr(array $VariantAttr = null)
    {
      $this->VariantAttr = $VariantAttr;
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
      return isset($this->VariantAttr[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VariantAttr
     */
    public function offsetGet($offset)
    {
      return $this->VariantAttr[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VariantAttr $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VariantAttr[] = $value;
      } else {
        $this->VariantAttr[$offset] = $value;
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
      unset($this->VariantAttr[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VariantAttr Return the current element
     */
    public function current()
    {
      return current($this->VariantAttr);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VariantAttr);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VariantAttr);
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
      reset($this->VariantAttr);
    }

    /**
     * Countable implementation
     *
     * @return VariantAttr Return count of elements
     */
    public function count()
    {
      return count($this->VariantAttr);
    }

}

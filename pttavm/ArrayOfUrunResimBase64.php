<?php

namespace PttAVM;

class ArrayOfUrunResimBase64 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UrunResimBase64[] $UrunResimBase64
     */
    protected $UrunResimBase64 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UrunResimBase64[]
     */
    public function getUrunResimBase64()
    {
      return $this->UrunResimBase64;
    }

    /**
     * @param UrunResimBase64[] $UrunResimBase64
     * @return \PttAVM\ArrayOfUrunResimBase64
     */
    public function setUrunResimBase64(array $UrunResimBase64 = null)
    {
      $this->UrunResimBase64 = $UrunResimBase64;
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
      return isset($this->UrunResimBase64[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UrunResimBase64
     */
    public function offsetGet($offset)
    {
      return $this->UrunResimBase64[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UrunResimBase64 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UrunResimBase64[] = $value;
      } else {
        $this->UrunResimBase64[$offset] = $value;
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
      unset($this->UrunResimBase64[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UrunResimBase64 Return the current element
     */
    public function current()
    {
      return current($this->UrunResimBase64);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UrunResimBase64);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UrunResimBase64);
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
      reset($this->UrunResimBase64);
    }

    /**
     * Countable implementation
     *
     * @return UrunResimBase64 Return count of elements
     */
    public function count()
    {
      return count($this->UrunResimBase64);
    }

}

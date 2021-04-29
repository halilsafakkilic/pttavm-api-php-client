<?php

namespace PttAVM;

class ArrayOfUrunResim implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UrunResim[] $UrunResim
     */
    protected $UrunResim = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UrunResim[]
     */
    public function getUrunResim()
    {
      return $this->UrunResim;
    }

    /**
     * @param UrunResim[] $UrunResim
     * @return \PttAVM\ArrayOfUrunResim
     */
    public function setUrunResim(array $UrunResim = null)
    {
      $this->UrunResim = $UrunResim;
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
      return isset($this->UrunResim[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UrunResim
     */
    public function offsetGet($offset)
    {
      return $this->UrunResim[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UrunResim $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UrunResim[] = $value;
      } else {
        $this->UrunResim[$offset] = $value;
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
      unset($this->UrunResim[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UrunResim Return the current element
     */
    public function current()
    {
      return current($this->UrunResim);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UrunResim);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UrunResim);
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
      reset($this->UrunResim);
    }

    /**
     * Countable implementation
     *
     * @return UrunResim Return count of elements
     */
    public function count()
    {
      return count($this->UrunResim);
    }

}

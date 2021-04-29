<?php

namespace PttAVM;

class ArrayOfStokUrun implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StokUrun[] $StokUrun
     */
    protected $StokUrun = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StokUrun[]
     */
    public function getStokUrun()
    {
      return $this->StokUrun;
    }

    /**
     * @param StokUrun[] $StokUrun
     * @return \PttAVM\ArrayOfStokUrun
     */
    public function setStokUrun(array $StokUrun = null)
    {
      $this->StokUrun = $StokUrun;
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
      return isset($this->StokUrun[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StokUrun
     */
    public function offsetGet($offset)
    {
      return $this->StokUrun[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StokUrun $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StokUrun[] = $value;
      } else {
        $this->StokUrun[$offset] = $value;
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
      unset($this->StokUrun[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StokUrun Return the current element
     */
    public function current()
    {
      return current($this->StokUrun);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StokUrun);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StokUrun);
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
      reset($this->StokUrun);
    }

    /**
     * Countable implementation
     *
     * @return StokUrun Return count of elements
     */
    public function count()
    {
      return count($this->StokUrun);
    }

}

<?php

namespace PttAVM;

class ArrayOfSiparisUrun implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SiparisUrun[] $SiparisUrun
     */
    protected $SiparisUrun = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SiparisUrun[]
     */
    public function getSiparisUrun()
    {
      return $this->SiparisUrun;
    }

    /**
     * @param SiparisUrun[] $SiparisUrun
     * @return \PttAVM\ArrayOfSiparisUrun
     */
    public function setSiparisUrun(array $SiparisUrun = null)
    {
      $this->SiparisUrun = $SiparisUrun;
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
      return isset($this->SiparisUrun[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SiparisUrun
     */
    public function offsetGet($offset)
    {
      return $this->SiparisUrun[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SiparisUrun $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SiparisUrun[] = $value;
      } else {
        $this->SiparisUrun[$offset] = $value;
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
      unset($this->SiparisUrun[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SiparisUrun Return the current element
     */
    public function current()
    {
      return current($this->SiparisUrun);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SiparisUrun);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SiparisUrun);
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
      reset($this->SiparisUrun);
    }

    /**
     * Countable implementation
     *
     * @return SiparisUrun Return count of elements
     */
    public function count()
    {
      return count($this->SiparisUrun);
    }

}

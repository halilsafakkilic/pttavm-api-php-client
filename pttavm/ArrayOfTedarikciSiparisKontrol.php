<?php

namespace PttAVM;

class ArrayOfTedarikciSiparisKontrol implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TedarikciSiparisKontrol[] $TedarikciSiparisKontrol
     */
    protected $TedarikciSiparisKontrol = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TedarikciSiparisKontrol[]
     */
    public function getTedarikciSiparisKontrol()
    {
      return $this->TedarikciSiparisKontrol;
    }

    /**
     * @param TedarikciSiparisKontrol[] $TedarikciSiparisKontrol
     * @return \PttAVM\ArrayOfTedarikciSiparisKontrol
     */
    public function setTedarikciSiparisKontrol(array $TedarikciSiparisKontrol = null)
    {
      $this->TedarikciSiparisKontrol = $TedarikciSiparisKontrol;
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
      return isset($this->TedarikciSiparisKontrol[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TedarikciSiparisKontrol
     */
    public function offsetGet($offset)
    {
      return $this->TedarikciSiparisKontrol[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TedarikciSiparisKontrol $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TedarikciSiparisKontrol[] = $value;
      } else {
        $this->TedarikciSiparisKontrol[$offset] = $value;
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
      unset($this->TedarikciSiparisKontrol[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TedarikciSiparisKontrol Return the current element
     */
    public function current()
    {
      return current($this->TedarikciSiparisKontrol);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TedarikciSiparisKontrol);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TedarikciSiparisKontrol);
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
      reset($this->TedarikciSiparisKontrol);
    }

    /**
     * Countable implementation
     *
     * @return TedarikciSiparisKontrol Return count of elements
     */
    public function count()
    {
      return count($this->TedarikciSiparisKontrol);
    }

}

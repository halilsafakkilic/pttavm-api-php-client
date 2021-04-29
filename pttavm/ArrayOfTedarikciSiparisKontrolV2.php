<?php

namespace PttAVM;

class ArrayOfTedarikciSiparisKontrolV2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TedarikciSiparisKontrolV2[] $TedarikciSiparisKontrolV2
     */
    protected $TedarikciSiparisKontrolV2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TedarikciSiparisKontrolV2[]
     */
    public function getTedarikciSiparisKontrolV2()
    {
      return $this->TedarikciSiparisKontrolV2;
    }

    /**
     * @param TedarikciSiparisKontrolV2[] $TedarikciSiparisKontrolV2
     * @return \PttAVM\ArrayOfTedarikciSiparisKontrolV2
     */
    public function setTedarikciSiparisKontrolV2(array $TedarikciSiparisKontrolV2 = null)
    {
      $this->TedarikciSiparisKontrolV2 = $TedarikciSiparisKontrolV2;
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
      return isset($this->TedarikciSiparisKontrolV2[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TedarikciSiparisKontrolV2
     */
    public function offsetGet($offset)
    {
      return $this->TedarikciSiparisKontrolV2[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TedarikciSiparisKontrolV2 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TedarikciSiparisKontrolV2[] = $value;
      } else {
        $this->TedarikciSiparisKontrolV2[$offset] = $value;
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
      unset($this->TedarikciSiparisKontrolV2[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TedarikciSiparisKontrolV2 Return the current element
     */
    public function current()
    {
      return current($this->TedarikciSiparisKontrolV2);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TedarikciSiparisKontrolV2);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TedarikciSiparisKontrolV2);
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
      reset($this->TedarikciSiparisKontrolV2);
    }

    /**
     * Countable implementation
     *
     * @return TedarikciSiparisKontrolV2 Return count of elements
     */
    public function count()
    {
      return count($this->TedarikciSiparisKontrolV2);
    }

}

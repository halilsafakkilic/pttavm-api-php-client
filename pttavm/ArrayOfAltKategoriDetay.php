<?php

namespace PttAVM;

class ArrayOfAltKategoriDetay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AltKategoriDetay[] $AltKategoriDetay
     */
    protected $AltKategoriDetay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AltKategoriDetay[]
     */
    public function getAltKategoriDetay()
    {
      return $this->AltKategoriDetay;
    }

    /**
     * @param AltKategoriDetay[] $AltKategoriDetay
     * @return \PttAVM\ArrayOfAltKategoriDetay
     */
    public function setAltKategoriDetay(array $AltKategoriDetay = null)
    {
      $this->AltKategoriDetay = $AltKategoriDetay;
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
      return isset($this->AltKategoriDetay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AltKategoriDetay
     */
    public function offsetGet($offset)
    {
      return $this->AltKategoriDetay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AltKategoriDetay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AltKategoriDetay[] = $value;
      } else {
        $this->AltKategoriDetay[$offset] = $value;
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
      unset($this->AltKategoriDetay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AltKategoriDetay Return the current element
     */
    public function current()
    {
      return current($this->AltKategoriDetay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AltKategoriDetay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AltKategoriDetay);
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
      reset($this->AltKategoriDetay);
    }

    /**
     * Countable implementation
     *
     * @return AltKategoriDetay Return count of elements
     */
    public function count()
    {
      return count($this->AltKategoriDetay);
    }

}

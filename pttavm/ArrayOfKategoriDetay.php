<?php

namespace PttAVM;

class ArrayOfKategoriDetay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KategoriDetay[] $KategoriDetay
     */
    protected $KategoriDetay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KategoriDetay[]
     */
    public function getKategoriDetay()
    {
      return $this->KategoriDetay;
    }

    /**
     * @param KategoriDetay[] $KategoriDetay
     * @return \PttAVM\ArrayOfKategoriDetay
     */
    public function setKategoriDetay(array $KategoriDetay = null)
    {
      $this->KategoriDetay = $KategoriDetay;
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
      return isset($this->KategoriDetay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KategoriDetay
     */
    public function offsetGet($offset)
    {
      return $this->KategoriDetay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KategoriDetay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KategoriDetay[] = $value;
      } else {
        $this->KategoriDetay[$offset] = $value;
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
      unset($this->KategoriDetay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KategoriDetay Return the current element
     */
    public function current()
    {
      return current($this->KategoriDetay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KategoriDetay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KategoriDetay);
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
      reset($this->KategoriDetay);
    }

    /**
     * Countable implementation
     *
     * @return KategoriDetay Return count of elements
     */
    public function count()
    {
      return count($this->KategoriDetay);
    }

}

<?php

namespace PttAVM;

class ArrayOfcategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var category[] $category
     */
    protected $category = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return category[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param category[] $category
     * @return \PttAVM\ArrayOfcategory
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
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
      return isset($this->category[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return category
     */
    public function offsetGet($offset)
    {
      return $this->category[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param category $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->category[] = $value;
      } else {
        $this->category[$offset] = $value;
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
      unset($this->category[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return category Return the current element
     */
    public function current()
    {
      return current($this->category);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->category);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->category);
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
      reset($this->category);
    }

    /**
     * Countable implementation
     *
     * @return category Return count of elements
     */
    public function count()
    {
      return count($this->category);
    }

}

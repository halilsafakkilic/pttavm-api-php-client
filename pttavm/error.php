<?php

namespace PttAVM;

class error
{

    /**
     * @var string $error_code
     */
    protected $error_code = null;

    /**
     * @var string $error_message
     */
    protected $error_message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getError_code()
    {
      return $this->error_code;
    }

    /**
     * @param string $error_code
     * @return \PttAVM\error
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getError_message()
    {
      return $this->error_message;
    }

    /**
     * @param string $error_message
     * @return \PttAVM\error
     */
    public function setError_message($error_message)
    {
      $this->error_message = $error_message;
      return $this;
    }

}

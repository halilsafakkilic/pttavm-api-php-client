<?php

namespace PttAVM;

class StokResult
{

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var int $UrunId
     */
    protected $UrunId = null;

    /**
     * @var ArrayOfstring $WarningMessages
     */
    protected $WarningMessages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \PttAVM\StokResult
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \PttAVM\StokResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return int
     */
    public function getUrunId()
    {
      return $this->UrunId;
    }

    /**
     * @param int $UrunId
     * @return \PttAVM\StokResult
     */
    public function setUrunId($UrunId)
    {
      $this->UrunId = $UrunId;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getWarningMessages()
    {
      return $this->WarningMessages;
    }

    /**
     * @param ArrayOfstring $WarningMessages
     * @return \PttAVM\StokResult
     */
    public function setWarningMessages($WarningMessages)
    {
      $this->WarningMessages = $WarningMessages;
      return $this;
    }

}

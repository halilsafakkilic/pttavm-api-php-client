<?php

namespace PttAVM;

class OlmayanUrunAdetleriSifirla
{

    /**
     * @var ArrayOfint $AktifUrunIds
     */
    protected $AktifUrunIds = null;

    /**
     * @param ArrayOfint $AktifUrunIds
     */
    public function __construct($AktifUrunIds)
    {
      $this->AktifUrunIds = $AktifUrunIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getAktifUrunIds()
    {
      return $this->AktifUrunIds;
    }

    /**
     * @param ArrayOfint $AktifUrunIds
     * @return \PttAVM\OlmayanUrunAdetleriSifirla
     */
    public function setAktifUrunIds($AktifUrunIds)
    {
      $this->AktifUrunIds = $AktifUrunIds;
      return $this;
    }

}

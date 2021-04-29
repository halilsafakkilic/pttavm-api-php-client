<?php

namespace PttAVM;

class AktifYap
{

    /**
     * @var AktifUrunRequest $req
     */
    protected $req = null;

    /**
     * @param AktifUrunRequest $req
     */
    public function __construct($req)
    {
      $this->req = $req;
    }

    /**
     * @return AktifUrunRequest
     */
    public function getReq()
    {
      return $this->req;
    }

    /**
     * @param AktifUrunRequest $req
     * @return \PttAVM\AktifYap
     */
    public function setReq($req)
    {
      $this->req = $req;
      return $this;
    }

}

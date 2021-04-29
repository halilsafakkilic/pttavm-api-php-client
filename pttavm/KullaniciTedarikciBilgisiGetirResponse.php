<?php

namespace PttAVM;

class KullaniciTedarikciBilgisiGetirResponse
{

    /**
     * @var Tedarikci $KullaniciTedarikciBilgisiGetirResult
     */
    protected $KullaniciTedarikciBilgisiGetirResult = null;

    /**
     * @param Tedarikci $KullaniciTedarikciBilgisiGetirResult
     */
    public function __construct($KullaniciTedarikciBilgisiGetirResult)
    {
      $this->KullaniciTedarikciBilgisiGetirResult = $KullaniciTedarikciBilgisiGetirResult;
    }

    /**
     * @return Tedarikci
     */
    public function getKullaniciTedarikciBilgisiGetirResult()
    {
      return $this->KullaniciTedarikciBilgisiGetirResult;
    }

    /**
     * @param Tedarikci $KullaniciTedarikciBilgisiGetirResult
     * @return \PttAVM\KullaniciTedarikciBilgisiGetirResponse
     */
    public function setKullaniciTedarikciBilgisiGetirResult($KullaniciTedarikciBilgisiGetirResult)
    {
      $this->KullaniciTedarikciBilgisiGetirResult = $KullaniciTedarikciBilgisiGetirResult;
      return $this;
    }

}

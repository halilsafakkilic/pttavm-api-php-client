<?php

namespace PttAVM;

class SiparisKontrolListesi
{

    /**
     * @var \DateTime $BaslangicTarihi
     */
    protected $BaslangicTarihi = null;

    /**
     * @var \DateTime $BitisTarihi
     */
    protected $BitisTarihi = null;

    /**
     * @var int $AktifSiparisler
     */
    protected $AktifSiparisler = null;

    /**
     * @param \DateTime $BaslangicTarihi
     * @param \DateTime $BitisTarihi
     * @param int $AktifSiparisler
     */
    public function __construct(\DateTime $BaslangicTarihi, \DateTime $BitisTarihi, $AktifSiparisler)
    {
      $this->BaslangicTarihi = $BaslangicTarihi->format(\DateTime::ATOM);
      $this->BitisTarihi = $BitisTarihi->format(\DateTime::ATOM);
      $this->AktifSiparisler = $AktifSiparisler;
    }

    /**
     * @return \DateTime
     */
    public function getBaslangicTarihi()
    {
      if ($this->BaslangicTarihi == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BaslangicTarihi);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BaslangicTarihi
     * @return \PttAVM\SiparisKontrolListesi
     */
    public function setBaslangicTarihi(\DateTime $BaslangicTarihi)
    {
      $this->BaslangicTarihi = $BaslangicTarihi->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBitisTarihi()
    {
      if ($this->BitisTarihi == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BitisTarihi);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BitisTarihi
     * @return \PttAVM\SiparisKontrolListesi
     */
    public function setBitisTarihi(\DateTime $BitisTarihi)
    {
      $this->BitisTarihi = $BitisTarihi->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getAktifSiparisler()
    {
      return $this->AktifSiparisler;
    }

    /**
     * @param int $AktifSiparisler
     * @return \PttAVM\SiparisKontrolListesi
     */
    public function setAktifSiparisler($AktifSiparisler)
    {
      $this->AktifSiparisler = $AktifSiparisler;
      return $this;
    }

}

<?php

namespace PttAVM;

class SiparisUrun
{

    /**
     * @var string $GarantiVerenFirma
     */
    protected $GarantiVerenFirma = null;

    /**
     * @var string $KargoKimden
     */
    protected $KargoKimden = null;

    /**
     * @var float $KdvDahilToplamTutar
     */
    protected $KdvDahilToplamTutar = null;

    /**
     * @var float $KdvHaricToplamTutar
     */
    protected $KdvHaricToplamTutar = null;

    /**
     * @var float $KdvHaricTutar
     */
    protected $KdvHaricTutar = null;

    /**
     * @var float $KdvOrani
     */
    protected $KdvOrani = null;

    /**
     * @var float $Komisyon
     */
    protected $Komisyon = null;

    /**
     * @var string $SiparisDurumu
     */
    protected $SiparisDurumu = null;

    /**
     * @var string $SiparisNotu
     */
    protected $SiparisNotu = null;

    /**
     * @var int $ToplamIslemAdedi
     */
    protected $ToplamIslemAdedi = null;

    /**
     * @var string $UrunBarkod
     */
    protected $UrunBarkod = null;

    /**
     * @var int $UrunId
     */
    protected $UrunId = null;

    /**
     * @var string $VariantBarkod
     */
    protected $VariantBarkod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGarantiVerenFirma()
    {
      return $this->GarantiVerenFirma;
    }

    /**
     * @param string $GarantiVerenFirma
     * @return \PttAVM\SiparisUrun
     */
    public function setGarantiVerenFirma($GarantiVerenFirma)
    {
      $this->GarantiVerenFirma = $GarantiVerenFirma;
      return $this;
    }

    /**
     * @return string
     */
    public function getKargoKimden()
    {
      return $this->KargoKimden;
    }

    /**
     * @param string $KargoKimden
     * @return \PttAVM\SiparisUrun
     */
    public function setKargoKimden($KargoKimden)
    {
      $this->KargoKimden = $KargoKimden;
      return $this;
    }

    /**
     * @return float
     */
    public function getKdvDahilToplamTutar()
    {
      return $this->KdvDahilToplamTutar;
    }

    /**
     * @param float $KdvDahilToplamTutar
     * @return \PttAVM\SiparisUrun
     */
    public function setKdvDahilToplamTutar($KdvDahilToplamTutar)
    {
      $this->KdvDahilToplamTutar = $KdvDahilToplamTutar;
      return $this;
    }

    /**
     * @return float
     */
    public function getKdvHaricToplamTutar()
    {
      return $this->KdvHaricToplamTutar;
    }

    /**
     * @param float $KdvHaricToplamTutar
     * @return \PttAVM\SiparisUrun
     */
    public function setKdvHaricToplamTutar($KdvHaricToplamTutar)
    {
      $this->KdvHaricToplamTutar = $KdvHaricToplamTutar;
      return $this;
    }

    /**
     * @return float
     */
    public function getKdvHaricTutar()
    {
      return $this->KdvHaricTutar;
    }

    /**
     * @param float $KdvHaricTutar
     * @return \PttAVM\SiparisUrun
     */
    public function setKdvHaricTutar($KdvHaricTutar)
    {
      $this->KdvHaricTutar = $KdvHaricTutar;
      return $this;
    }

    /**
     * @return float
     */
    public function getKdvOrani()
    {
      return $this->KdvOrani;
    }

    /**
     * @param float $KdvOrani
     * @return \PttAVM\SiparisUrun
     */
    public function setKdvOrani($KdvOrani)
    {
      $this->KdvOrani = $KdvOrani;
      return $this;
    }

    /**
     * @return float
     */
    public function getKomisyon()
    {
      return $this->Komisyon;
    }

    /**
     * @param float $Komisyon
     * @return \PttAVM\SiparisUrun
     */
    public function setKomisyon($Komisyon)
    {
      $this->Komisyon = $Komisyon;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisDurumu()
    {
      return $this->SiparisDurumu;
    }

    /**
     * @param string $SiparisDurumu
     * @return \PttAVM\SiparisUrun
     */
    public function setSiparisDurumu($SiparisDurumu)
    {
      $this->SiparisDurumu = $SiparisDurumu;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisNotu()
    {
      return $this->SiparisNotu;
    }

    /**
     * @param string $SiparisNotu
     * @return \PttAVM\SiparisUrun
     */
    public function setSiparisNotu($SiparisNotu)
    {
      $this->SiparisNotu = $SiparisNotu;
      return $this;
    }

    /**
     * @return int
     */
    public function getToplamIslemAdedi()
    {
      return $this->ToplamIslemAdedi;
    }

    /**
     * @param int $ToplamIslemAdedi
     * @return \PttAVM\SiparisUrun
     */
    public function setToplamIslemAdedi($ToplamIslemAdedi)
    {
      $this->ToplamIslemAdedi = $ToplamIslemAdedi;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunBarkod()
    {
      return $this->UrunBarkod;
    }

    /**
     * @param string $UrunBarkod
     * @return \PttAVM\SiparisUrun
     */
    public function setUrunBarkod($UrunBarkod)
    {
      $this->UrunBarkod = $UrunBarkod;
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
     * @return \PttAVM\SiparisUrun
     */
    public function setUrunId($UrunId)
    {
      $this->UrunId = $UrunId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantBarkod()
    {
      return $this->VariantBarkod;
    }

    /**
     * @param string $VariantBarkod
     * @return \PttAVM\SiparisUrun
     */
    public function setVariantBarkod($VariantBarkod)
    {
      $this->VariantBarkod = $VariantBarkod;
      return $this;
    }

}

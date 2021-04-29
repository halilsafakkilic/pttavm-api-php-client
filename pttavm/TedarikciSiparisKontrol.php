<?php

namespace PttAVM;

class TedarikciSiparisKontrol
{

    /**
     * @var string $Eposta
     */
    protected $Eposta = null;

    /**
     * @var string $FirmaUnvani
     */
    protected $FirmaUnvani = null;

    /**
     * @var string $GarantiVerenFirma
     */
    protected $GarantiVerenFirma = null;

    /**
     * @var string $IlKod
     */
    protected $IlKod = null;

    /**
     * @var string $IlceKod
     */
    protected $IlceKod = null;

    /**
     * @var \DateTime $IslemTarihi
     */
    protected $IslemTarihi = null;

    /**
     * @var string $KargoIndirimi
     */
    protected $KargoIndirimi = null;

    /**
     * @var float $KargoTutari
     */
    protected $KargoTutari = null;

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
     * @var string $MusteriAdi
     */
    protected $MusteriAdi = null;

    /**
     * @var string $MusteriId
     */
    protected $MusteriId = null;

    /**
     * @var string $MusteriSoyadi
     */
    protected $MusteriSoyadi = null;

    /**
     * @var string $SiparisAdresi
     */
    protected $SiparisAdresi = null;

    /**
     * @var string $SiparisBilgisi
     */
    protected $SiparisBilgisi = null;

    /**
     * @var string $SiparisDurumu
     */
    protected $SiparisDurumu = null;

    /**
     * @var string $SiparisIlce
     */
    protected $SiparisIlce = null;

    /**
     * @var string $SiparisIli
     */
    protected $SiparisIli = null;

    /**
     * @var string $SiparisNo
     */
    protected $SiparisNo = null;

    /**
     * @var string $TCKN
     */
    protected $TCKN = null;

    /**
     * @var string $TedarikciFirmaAdi
     */
    protected $TedarikciFirmaAdi = null;

    /**
     * @var string $TelefonNo
     */
    protected $TelefonNo = null;

    /**
     * @var int $ToplamIslemAdedi
     */
    protected $ToplamIslemAdedi = null;

    /**
     * @var string $UrunAdi
     */
    protected $UrunAdi = null;

    /**
     * @var string $UrunBarkod
     */
    protected $UrunBarkod = null;

    /**
     * @var string $UrunId
     */
    protected $UrunId = null;

    /**
     * @var string $UrunKodu
     */
    protected $UrunKodu = null;

    /**
     * @var string $VariantBarkod
     */
    protected $VariantBarkod = null;

    /**
     * @var string $VergiDaire
     */
    protected $VergiDaire = null;

    /**
     * @var string $VergiNo
     */
    protected $VergiNo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEposta()
    {
      return $this->Eposta;
    }

    /**
     * @param string $Eposta
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setEposta($Eposta)
    {
      $this->Eposta = $Eposta;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirmaUnvani()
    {
      return $this->FirmaUnvani;
    }

    /**
     * @param string $FirmaUnvani
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setFirmaUnvani($FirmaUnvani)
    {
      $this->FirmaUnvani = $FirmaUnvani;
      return $this;
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setGarantiVerenFirma($GarantiVerenFirma)
    {
      $this->GarantiVerenFirma = $GarantiVerenFirma;
      return $this;
    }

    /**
     * @return string
     */
    public function getIlKod()
    {
      return $this->IlKod;
    }

    /**
     * @param string $IlKod
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setIlKod($IlKod)
    {
      $this->IlKod = $IlKod;
      return $this;
    }

    /**
     * @return string
     */
    public function getIlceKod()
    {
      return $this->IlceKod;
    }

    /**
     * @param string $IlceKod
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setIlceKod($IlceKod)
    {
      $this->IlceKod = $IlceKod;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIslemTarihi()
    {
      if ($this->IslemTarihi == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IslemTarihi);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IslemTarihi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setIslemTarihi(\DateTime $IslemTarihi = null)
    {
      if ($IslemTarihi == null) {
       $this->IslemTarihi = null;
      } else {
        $this->IslemTarihi = $IslemTarihi->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getKargoIndirimi()
    {
      return $this->KargoIndirimi;
    }

    /**
     * @param string $KargoIndirimi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setKargoIndirimi($KargoIndirimi)
    {
      $this->KargoIndirimi = $KargoIndirimi;
      return $this;
    }

    /**
     * @return float
     */
    public function getKargoTutari()
    {
      return $this->KargoTutari;
    }

    /**
     * @param float $KargoTutari
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setKargoTutari($KargoTutari)
    {
      $this->KargoTutari = $KargoTutari;
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
     * @return \PttAVM\TedarikciSiparisKontrol
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
     * @return \PttAVM\TedarikciSiparisKontrol
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
     * @return \PttAVM\TedarikciSiparisKontrol
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
     * @return \PttAVM\TedarikciSiparisKontrol
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setKomisyon($Komisyon)
    {
      $this->Komisyon = $Komisyon;
      return $this;
    }

    /**
     * @return string
     */
    public function getMusteriAdi()
    {
      return $this->MusteriAdi;
    }

    /**
     * @param string $MusteriAdi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setMusteriAdi($MusteriAdi)
    {
      $this->MusteriAdi = $MusteriAdi;
      return $this;
    }

    /**
     * @return string
     */
    public function getMusteriId()
    {
      return $this->MusteriId;
    }

    /**
     * @param string $MusteriId
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setMusteriId($MusteriId)
    {
      $this->MusteriId = $MusteriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMusteriSoyadi()
    {
      return $this->MusteriSoyadi;
    }

    /**
     * @param string $MusteriSoyadi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setMusteriSoyadi($MusteriSoyadi)
    {
      $this->MusteriSoyadi = $MusteriSoyadi;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisAdresi()
    {
      return $this->SiparisAdresi;
    }

    /**
     * @param string $SiparisAdresi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisAdresi($SiparisAdresi)
    {
      $this->SiparisAdresi = $SiparisAdresi;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisBilgisi()
    {
      return $this->SiparisBilgisi;
    }

    /**
     * @param string $SiparisBilgisi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisBilgisi($SiparisBilgisi)
    {
      $this->SiparisBilgisi = $SiparisBilgisi;
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisDurumu($SiparisDurumu)
    {
      $this->SiparisDurumu = $SiparisDurumu;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisIlce()
    {
      return $this->SiparisIlce;
    }

    /**
     * @param string $SiparisIlce
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisIlce($SiparisIlce)
    {
      $this->SiparisIlce = $SiparisIlce;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisIli()
    {
      return $this->SiparisIli;
    }

    /**
     * @param string $SiparisIli
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisIli($SiparisIli)
    {
      $this->SiparisIli = $SiparisIli;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiparisNo()
    {
      return $this->SiparisNo;
    }

    /**
     * @param string $SiparisNo
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setSiparisNo($SiparisNo)
    {
      $this->SiparisNo = $SiparisNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTCKN()
    {
      return $this->TCKN;
    }

    /**
     * @param string $TCKN
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setTCKN($TCKN)
    {
      $this->TCKN = $TCKN;
      return $this;
    }

    /**
     * @return string
     */
    public function getTedarikciFirmaAdi()
    {
      return $this->TedarikciFirmaAdi;
    }

    /**
     * @param string $TedarikciFirmaAdi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setTedarikciFirmaAdi($TedarikciFirmaAdi)
    {
      $this->TedarikciFirmaAdi = $TedarikciFirmaAdi;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelefonNo()
    {
      return $this->TelefonNo;
    }

    /**
     * @param string $TelefonNo
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setTelefonNo($TelefonNo)
    {
      $this->TelefonNo = $TelefonNo;
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setToplamIslemAdedi($ToplamIslemAdedi)
    {
      $this->ToplamIslemAdedi = $ToplamIslemAdedi;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunAdi()
    {
      return $this->UrunAdi;
    }

    /**
     * @param string $UrunAdi
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setUrunAdi($UrunAdi)
    {
      $this->UrunAdi = $UrunAdi;
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setUrunBarkod($UrunBarkod)
    {
      $this->UrunBarkod = $UrunBarkod;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunId()
    {
      return $this->UrunId;
    }

    /**
     * @param string $UrunId
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setUrunId($UrunId)
    {
      $this->UrunId = $UrunId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrunKodu()
    {
      return $this->UrunKodu;
    }

    /**
     * @param string $UrunKodu
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setUrunKodu($UrunKodu)
    {
      $this->UrunKodu = $UrunKodu;
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
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setVariantBarkod($VariantBarkod)
    {
      $this->VariantBarkod = $VariantBarkod;
      return $this;
    }

    /**
     * @return string
     */
    public function getVergiDaire()
    {
      return $this->VergiDaire;
    }

    /**
     * @param string $VergiDaire
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setVergiDaire($VergiDaire)
    {
      $this->VergiDaire = $VergiDaire;
      return $this;
    }

    /**
     * @return string
     */
    public function getVergiNo()
    {
      return $this->VergiNo;
    }

    /**
     * @param string $VergiNo
     * @return \PttAVM\TedarikciSiparisKontrol
     */
    public function setVergiNo($VergiNo)
    {
      $this->VergiNo = $VergiNo;
      return $this;
    }

}

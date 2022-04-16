<?php

namespace PttAVM;

class TedarikciSiparisKontrolV2
{

    /**
     * @var string $Eposta
     */
    protected $Eposta = null;

    /**
     * @var string $FarkliAdres
     */
    protected $FarkliAdres = null;

    /**
     * @var string $FaturaAdresi
     */
    protected $FaturaAdresi = null;

    /**
     * @var string $FaturaIlce
     */
    protected $FaturaIlce = null;

    /**
     * @var string $FaturaIli
     */
    protected $FaturaIli = null;

    /**
     * @var string $FaturaMusteriAdi
     */
    protected $FaturaMusteriAdi = null;

    /**
     * @var string $FaturaMusteriSoyadi
     */
    protected $FaturaMusteriSoyadi = null;

    /**
     * @var string $FirmaUnvani
     */
    protected $FirmaUnvani = null;

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
     * @var float $KargoTutari
     */
    protected $KargoTutari = null;

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
     * @var ArrayOfSiparisUrun $SiparisUrunler
     */
    protected $SiparisUrunler = null;

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
     * @var string $UrunAdi
     */
    protected $UrunAdi = null;

    /**
     * @var string $UrunKodu
     */
    protected $UrunKodu = null;

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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setEposta($Eposta)
    {
      $this->Eposta = $Eposta;
      return $this;
    }

    /**
     * @return string
     */
    public function getFarkliAdres()
    {
      return $this->FarkliAdres;
    }

    /**
     * @param string $FarkliAdres
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFarkliAdres($FarkliAdres)
    {
      $this->FarkliAdres = $FarkliAdres;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaturaAdresi()
    {
      return $this->FaturaAdresi;
    }

    /**
     * @param string $FaturaAdresi
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFaturaAdresi($FaturaAdresi)
    {
      $this->FaturaAdresi = $FaturaAdresi;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaturaIlce()
    {
      return $this->FaturaIlce;
    }

    /**
     * @param string $FaturaIlce
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFaturaIlce($FaturaIlce)
    {
      $this->FaturaIlce = $FaturaIlce;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaturaIli()
    {
      return $this->FaturaIli;
    }

    /**
     * @param string $FaturaIli
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFaturaIli($FaturaIli)
    {
      $this->FaturaIli = $FaturaIli;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaturaMusteriAdi()
    {
      return $this->FaturaMusteriAdi;
    }

    /**
     * @param string $FaturaMusteriAdi
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFaturaMusteriAdi($FaturaMusteriAdi)
    {
      $this->FaturaMusteriAdi = $FaturaMusteriAdi;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaturaMusteriSoyadi()
    {
      return $this->FaturaMusteriSoyadi;
    }

    /**
     * @param string $FaturaMusteriSoyadi
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFaturaMusteriSoyadi($FaturaMusteriSoyadi)
    {
      $this->FaturaMusteriSoyadi = $FaturaMusteriSoyadi;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setFirmaUnvani($FirmaUnvani)
    {
      $this->FirmaUnvani = $FirmaUnvani;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return float
     */
    public function getKargoTutari()
    {
      return $this->KargoTutari;
    }

    /**
     * @param float $KargoTutari
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setKargoTutari($KargoTutari)
    {
      $this->KargoTutari = $KargoTutari;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setSiparisAdresi($SiparisAdresi)
    {
      $this->SiparisAdresi = $SiparisAdresi;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setSiparisNo($SiparisNo)
    {
      $this->SiparisNo = $SiparisNo;
      return $this;
    }

    /**
     * @return ArrayOfSiparisUrun
     */
    public function getSiparisUrunler()
    {
      return $this->SiparisUrunler;
    }

    /**
     * @param ArrayOfSiparisUrun $SiparisUrunler
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setSiparisUrunler($SiparisUrunler)
    {
      $this->SiparisUrunler = $SiparisUrunler;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setTelefonNo($TelefonNo)
    {
      $this->TelefonNo = $TelefonNo;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setUrunAdi($UrunAdi)
    {
      $this->UrunAdi = $UrunAdi;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setUrunKodu($UrunKodu)
    {
      $this->UrunKodu = $UrunKodu;
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
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
     * @return \PttAVM\TedarikciSiparisKontrolV2
     */
    public function setVergiNo($VergiNo)
    {
      $this->VergiNo = $VergiNo;
      return $this;
    }

}

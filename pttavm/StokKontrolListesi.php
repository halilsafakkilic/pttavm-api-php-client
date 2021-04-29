<?php

namespace PttAVM;

class StokKontrolListesi
{

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    /**
     * @var int $SearchKategoriId
     */
    protected $SearchKategoriId = null;

    /**
     * @var int $SearchAltKategoriId
     */
    protected $SearchAltKategoriId = null;

    /**
     * @var string $SearchUrunAdi
     */
    protected $SearchUrunAdi = null;

    /**
     * @var string $SearchBarkod
     */
    protected $SearchBarkod = null;

    /**
     * @var int $SearchAktifPasif
     */
    protected $SearchAktifPasif = null;

    /**
     * @var int $SearchMevcut
     */
    protected $SearchMevcut = null;

    /**
     * @var int $SearchTedarikciKategoriId
     */
    protected $SearchTedarikciKategoriId = null;

    /**
     * @var string $SearchYeniKategoriId
     */
    protected $SearchYeniKategoriId = null;

    /**
     * @param int $ShopId
     * @param int $SearchKategoriId
     * @param int $SearchAltKategoriId
     * @param string $SearchUrunAdi
     * @param string $SearchBarkod
     * @param int $SearchAktifPasif
     * @param int $SearchMevcut
     * @param int $SearchTedarikciKategoriId
     * @param string $SearchYeniKategoriId
     */
    public function __construct($ShopId, $SearchKategoriId, $SearchAltKategoriId, $SearchUrunAdi, $SearchBarkod, $SearchAktifPasif, $SearchMevcut, $SearchTedarikciKategoriId, $SearchYeniKategoriId)
    {
      $this->ShopId = $ShopId;
      $this->SearchKategoriId = $SearchKategoriId;
      $this->SearchAltKategoriId = $SearchAltKategoriId;
      $this->SearchUrunAdi = $SearchUrunAdi;
      $this->SearchBarkod = $SearchBarkod;
      $this->SearchAktifPasif = $SearchAktifPasif;
      $this->SearchMevcut = $SearchMevcut;
      $this->SearchTedarikciKategoriId = $SearchTedarikciKategoriId;
      $this->SearchYeniKategoriId = $SearchYeniKategoriId;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param int $ShopId
     * @return \PttAVM\StokKontrolListesi
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchKategoriId()
    {
      return $this->SearchKategoriId;
    }

    /**
     * @param int $SearchKategoriId
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchKategoriId($SearchKategoriId)
    {
      $this->SearchKategoriId = $SearchKategoriId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchAltKategoriId()
    {
      return $this->SearchAltKategoriId;
    }

    /**
     * @param int $SearchAltKategoriId
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchAltKategoriId($SearchAltKategoriId)
    {
      $this->SearchAltKategoriId = $SearchAltKategoriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchUrunAdi()
    {
      return $this->SearchUrunAdi;
    }

    /**
     * @param string $SearchUrunAdi
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchUrunAdi($SearchUrunAdi)
    {
      $this->SearchUrunAdi = $SearchUrunAdi;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchBarkod()
    {
      return $this->SearchBarkod;
    }

    /**
     * @param string $SearchBarkod
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchBarkod($SearchBarkod)
    {
      $this->SearchBarkod = $SearchBarkod;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchAktifPasif()
    {
      return $this->SearchAktifPasif;
    }

    /**
     * @param int $SearchAktifPasif
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchAktifPasif($SearchAktifPasif)
    {
      $this->SearchAktifPasif = $SearchAktifPasif;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchMevcut()
    {
      return $this->SearchMevcut;
    }

    /**
     * @param int $SearchMevcut
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchMevcut($SearchMevcut)
    {
      $this->SearchMevcut = $SearchMevcut;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchTedarikciKategoriId()
    {
      return $this->SearchTedarikciKategoriId;
    }

    /**
     * @param int $SearchTedarikciKategoriId
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchTedarikciKategoriId($SearchTedarikciKategoriId)
    {
      $this->SearchTedarikciKategoriId = $SearchTedarikciKategoriId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchYeniKategoriId()
    {
      return $this->SearchYeniKategoriId;
    }

    /**
     * @param string $SearchYeniKategoriId
     * @return \PttAVM\StokKontrolListesi
     */
    public function setSearchYeniKategoriId($SearchYeniKategoriId)
    {
      $this->SearchYeniKategoriId = $SearchYeniKategoriId;
      return $this;
    }

}

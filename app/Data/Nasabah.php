<?php
namespace App\Data;

class Nasabah{
    private $tabungan;

    public function __construct(Tabungan $tabungan){
        $this->tabungan = $tabungan;
    }

    public function lihatSaldo(){
        return $this->tabungan->cekSaldo();
    }

}
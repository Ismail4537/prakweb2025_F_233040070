<?php
include("Produk.php");
    class Komik extends Produk {
        public $jmlHal;
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHal) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHal = $jmlHal;
        }

        public function getInfoProduk() {
            $info = parent::getInfoProduk();
            return "Komik : " . $info . " - " . $this->jmlHal . " Halaman.";
        }
    }
?>
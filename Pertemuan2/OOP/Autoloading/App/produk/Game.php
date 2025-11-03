<?php
    include("Produk.php");
    class Game extends Produk {
        public $waktuMain;

        public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk() {
            // override method parent
            $infoParent = parent::getInfoProduk();
            $str = $infoParent . " - " . $this->waktuMain . " Jam.";
            return $str;
        }
    }
?>
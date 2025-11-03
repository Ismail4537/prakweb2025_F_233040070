<?php
    class Produk {
        private $judul, $penulis, $penerbit, $harga;

        public function __construct($judul, $penulis, $penerbit, $harga) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        // Getter
        public function getJudul() {
            return $this->judul;
        }
        public function getPenulis() {
            return $this->penulis;
        }
        public function getPenerbit() {
            return $this->penerbit;
        }
        public function getHarga() {
            return $this->harga;
        }
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
        public function getInfoProduk(){
            return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        }

        // Setter
        public function setJudul($judul) {
            $this->judul = $judul;
        }
        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }
        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }
        public function setHarga($harga) {
            $this->harga = $harga;
        }
    }
?>
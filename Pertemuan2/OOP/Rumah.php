<?php

class Rumah {
    
    public $warna;
    public $alamat;

    public function __construct($warna, $alamat) {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }

    public function kuncipintu(){
        return "Pintu Terkunci";
    }

    public function gantiWarna($warnaBaru){
        $this->warna = $warnaBaru;
        return "Warna rumah diganti jadi ".$warnaBaru."<br>";
    }

}

function pasangToilet(Rumah $rumah){
    return "Toilet dipasang di rumah berwarna ".$rumah->warna."<br>
    di Alamat: ".$rumah->alamat."<br>";
}

    $rumahSaya = new Rumah("Merah", "Jl. Merdeka No. 10");
    echo "Warna rumah saya: ".$rumahSaya->warna."<br>";
    echo "Alamat rumah saya: ".$rumahSaya->alamat."<br>";
    echo "<br>";
    echo pasangToilet($rumahSaya);
    echo "<br>";
    echo $rumahSaya->kuncipintu()."<br>";

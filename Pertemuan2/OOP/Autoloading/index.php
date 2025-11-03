<?php
require_once 'App/init.php';

$produk1 = new Komik("Toroto", "Faza Meonk", "Erlangga", 30000, 100);
echo $produk1->getInfoProduk(); 
?>
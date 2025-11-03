<?php
require_once 'App/init.php';

use App\produk\User as ProdukUser;

use App\service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
?>
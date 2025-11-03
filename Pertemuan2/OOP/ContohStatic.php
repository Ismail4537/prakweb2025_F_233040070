<?php
class ContohStatic {
    public static $angka = 69;

    public static function hello(){
        return "Hello World";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hello();
?>
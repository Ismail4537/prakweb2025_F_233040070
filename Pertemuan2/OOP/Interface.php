<?php
    interface BisaDimakanInt{
        public function makan();
    }

    class Seblak implements BisaDimakanInt{
        public function makan(){
            return "Seblak dimakan dengan lahap";
        }
    }

    $seblak = new Seblak();
    echo $seblak->makan();
?>
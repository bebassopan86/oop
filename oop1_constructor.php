<?php
    class AlasKaki{
        public 
            $merk = "Merk",
            $warna = "Warna",
            $ukuran = "Ukuran";

        public function getLabel(){
            return "$this->merk, $this->warna, $this->ukuran";
        }
    }

    //Object 1
    $swallow = new AlasKaki();
    $swallow->merk="Swallow";
    $swallow->warna="Merah";
    $swallow->ukuran=10;

    var_dump($swallow);
    echo "<br>";
    print_r($swallow);

    echo "<br>";
    echo $swallow->getLabel();
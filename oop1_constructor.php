<?php
    class AlasKaki{
        public $merk, $warna, $ukuran;

        public function __construct($merk = "Merk", $warna = "Warna", $ukuran = "Ukuran")
        {
            $this->merk = $merk;
            $this->warna = $warna;
            $this->ukuran = $ukuran;
        }

        public function getLabel(){
            return "$this->merk, $this->warna, $this->ukuran";
        }
    }

    //Object 1
    $swallow = new AlasKaki("Swallow", "Merah", 10);
    print_r($swallow);
<?php

class mahasiswa{
    private $nama = "Nafiati Rosidah<br/>";
    private $nim = "G.211.21.0092";

    function __construct() {

    }

    function setNama($a) {
        $this->nama=$a;
    }
    
    function setNim($b) {
        $this->nim=$b;
    }

    function getNama() {
        return "Nama :" .$this->nama;
    }

    function getNim() {
        return "NIM :" .$this->nim;
    }

    function __destruct() {

    }
}

?>
<?php 
//class mobil
Class Mobil {
    public $nama;
    public $merk;

    function getInfo() {
        echo "Nama Mobil : ".$this->nama. "<br/>";
        echo "Merk : " .$this->merk. "<br/>";
    }
}

//bagian main
$ferrari=new Mobil();
$ferrari->nama="Ferrari 488";
$ferrari->merk="Ferrari";

$ferrari->getInfo() ;
?>
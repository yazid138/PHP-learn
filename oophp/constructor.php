<?php

class Produk
{
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga; 

    public function __construct($judul = "Judul",$penulis = "Penulis",$penerbit = "Penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

}

// $produk1 = new Produk();
// var_dump($produk1);

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Sony","Bandai","Namco",25000);
$produk3 = new Produk();

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo $produk3->getLabel();
// echo "<br>";
echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";
echo "default : ".$produk3->getLabel();


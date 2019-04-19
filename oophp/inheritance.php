<?php

class Produk
{
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function __construct($judul = "Judul",$penulis = "Penulis",$penerbit = "Penerbit",$harga = 0,$jmlHalaman = 0,$waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
        return $str;
    }
}



// $produk1 = new Produk();
// var_dump($produk1);

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0);
$produk2 = new Game("Sony","Bandai","Namco",25000,0,50);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo $produk3->getLabel();
// echo "<br>";
// echo "Komik : ".$produk1->getLabel();
// echo "<br>";
// echo "Game : ".$produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


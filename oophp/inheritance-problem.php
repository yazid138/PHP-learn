<?php

class Produk
{
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe; 

    public function __construct($judul = "Judul",$penulis = "Penulis",$penerbit = "Penerbit",$harga = 0,$jmlHalaman = 0,$waktuMain = 0,$tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
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


// $produk1 = new Produk();
// var_dump($produk1);

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0,"Komik");
$produk2 = new Produk("Sony","Bandai","Namco",25000,0,50,"Game");

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo $produk3->getLabel();
// echo "<br>";
// echo "Komik : ".$produk1->getLabel();
// echo "<br>";
// echo "Game : ".$produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


<?php


class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain,)
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
        $str = " : , {$this->getLabel()} (Rp.{$this->harga}) ";


        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} - Halaman ";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktuMain} - Jam";
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


$produk1 = new Komik("Naruto", "Masasahi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// Komik : Naruto | Mashasi kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 Jam.
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

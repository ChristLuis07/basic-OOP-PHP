<?php


class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $type;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $type)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->type}, : , {$this->getLabel()} (Rp.{$this->harga}) ";
        if ($this->type == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->type == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
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


$produk1 = new Produk("Naruto", "Masasahi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// Komik : Naruto | Mashasi kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 Jam.
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

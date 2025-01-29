<?php

// Jualan Produk
// Komik
// Game
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "<br>";


echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();

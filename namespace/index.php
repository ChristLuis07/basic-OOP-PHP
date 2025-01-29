<?php

require 'app/init.php';

// $produk1 = new Komik("Naruto", "Masasahi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

use App\service\User as ServiceUser;
use App\product\User as ProductUser;

new ServiceUser();
new ProductUser();

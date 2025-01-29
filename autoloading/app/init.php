<?php

// require 'App/Produk/infoProduk.php';
// require ' App/Produk/Produk.php';
// require ' App/Produk/Komik.php';
// require ' App/Produk/Game.php';
// require ' App/Produk/cetakInfoProduk.php';


spl_autoload_register(function ($class) {
    require __DIR__ . '/product/' . $class . '.php';
});
